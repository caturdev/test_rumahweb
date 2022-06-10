<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends Frontend_Controller
{
    public function index()
    {
        $this->site->view('header');
        $this->site->view('registration');
        $this->site->view('footer');
    }
    public function submit()
    {
        $post = $this->input->post(NULL, TRUE);

        // post form validation
        $this->form_validation->set_rules('first_name', 'Nama Depan', 'required');
        $this->form_validation->set_rules('last_name', 'Nama Belakang', 'required');
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|callback_registration_email_check');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[12]|callback_registration_password_check');
        $this->form_validation->set_message('required', '%s masih kosong');
        $this->form_validation->set_message('min_length', '%s minimal 12 karakter');
        $this->form_validation->set_error_delimiters('<p class="fs-6 text-warning" style="margin-bottom: 0px;">', '</p>');

        if ($this->form_validation->run()) {
            $post_data = http_build_query(array(
                'firstName' => $post['first_name'],
                'lastName' => $post['last_name'],
                'email' => $post['email'],
                'password' => $post['password'],
            ));

            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user/create');
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('app-id:62a1d96b9eb7db738dd3044e'));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

            $response = curl_exec($curl);
            $decoded = json_decode($response, true);

            $login_data = array(
                'logged_in' => TRUE,
                'id' => $decoded['id'],
            );

            $this->session->set_userdata($login_data);

            redirect(site_url('dashboard'));
        } else {
            $this->site->view('header');
            $this->site->view('registration', array('post_data' => $post));
            $this->site->view('footer');
        }
    }
    public function registration_password_check($str)
    {
        $number = FALSE;
        $upper = FALSE;
        $lower = FALSE;

        if (preg_match('/[0-9]/', $str)) {
            $number = TRUE;
        }

        if (preg_match("/[A-Z]/", $str)) {
            $upper = TRUE;
        }

        if (preg_match("/[a-z]/", $str)) {
            $lower = TRUE;
        }

        if (!$number) {
            $this->form_validation->set_message('registration_password_check', 'Password harus menggunakan nomor');
            return FALSE;
        }

        if (!$upper) {
            $this->form_validation->set_message('registration_password_check', 'Password harus menggunakan huruf kapital');
            return FALSE;
        }

        if (!$lower) {
            $this->form_validation->set_message('registration_password_check', 'Password harus menggunakan huruf kecil');
            return FALSE;
        }

        return TRUE;
    }
    public function registration_email_check($str)
    {
        $email_extention = substr($str, strpos($str, '@'));

        if ($email_extention != '@rumahweb.co.id') {
            $this->form_validation->set_message('registration_email_check', 'Hanya boleh menggunakan email rumahweb.co.id');
            return FALSE;
        }

        return TRUE;
    }
}
