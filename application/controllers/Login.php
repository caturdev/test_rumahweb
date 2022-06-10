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
    }
}
