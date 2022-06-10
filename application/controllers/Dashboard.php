<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Backend_Controller
{
    public function index()
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('app-id:62a1d96b9eb7db738dd3044e'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);

        $decoded = NULL;

        if ($e = curl_error($curl)) {
            echo "error: ";
            echo $e;
        } else {
            $decoded = json_decode($response, true);
        }

        $this->site->view('header');
        $this->site->view('index', array('user_data' => $decoded));
        $this->site->view('footer');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url(''));
    }
}
