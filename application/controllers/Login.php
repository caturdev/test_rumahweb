<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends Frontend_Controller
{
    public function index()
    {
        $this->site->view('header');
        $this->site->view('login');
        $this->site->view('footer');
    }
    public function submit()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('email', 'Alamat Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('secret', 'Secret', 'required|callback_login_secret_check');
        $this->form_validation->set_message('required', '%s masih kosong');
        $this->form_validation->set_error_delimiters('<p class="fs-6 text-warning" style="margin-bottom: 0px;">', '</p>');

        if ($this->form_validation->run()) {

            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user/' . $post['secret']);
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
            $this->site->view('login', array('post_data' => $post));
            $this->site->view('footer');
        }
    }
    public function login_secret_check()
    {
        $post = $this->input->post(NULL, TRUE);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user/' . $post['secret']);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('app-id:62a1d96b9eb7db738dd3044e'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);
        $decoded = json_decode($response, true);

        if (isset($decoded['error'])) {
            $this->form_validation->set_message('login_secret_check', 'Secret atau ID tidak tepat');
            return FALSE;
        }

        return TRUE;
    }
}
