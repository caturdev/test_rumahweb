<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Backend_Controller
{
    public function index()
    {
        $session = $this->session->userdata();
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user/' . $session['id']);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('app-id:62a1d96b9eb7db738dd3044e'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);
        $decoded = json_decode($response, true);

        $decoded['registerDate'] = date('d M Y H:i:s', strtotime($decoded['registerDate']));
        $decoded['updatedDate'] = date('d M Y H:i:s', strtotime($decoded['updatedDate']));

        $this->site->view('header');
        $this->site->view('user', array('user_data' => $decoded));
        $this->site->view('footer');
    }
    public function update()
    {
        $session = $this->session->userdata();
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user/' . $session['id']);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('app-id:62a1d96b9eb7db738dd3044e'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);
        $decoded = json_decode($response, true);

        if (isset($decoded['dateOfBirth'])) {
            $decoded['dateOfBirth'] = date('Y-m-d', strtotime($decoded['dateOfBirth']));
        }

        $this->site->view('header');
        $this->site->view('user_update', array('user_data' => $decoded));
        $this->site->view('footer');
    }
    public function submit()
    {
        $session = $this->session->userdata();
        $post = $this->input->post(NULL, TRUE);

        $post_data = http_build_query(array(
            'firstName' => $post['first_name'],
            'lastName' => $post['last_name'],
            'dateOfBirth' => $post['date_of_birth'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
        ));

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user/' . $session['id']);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('app-id:62a1d96b9eb7db738dd3044e'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);
        $decoded = json_decode($response, true);

        redirect(site_url('user'));
    }
    public function delete()
    {
        $session = $this->session->userdata();

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://dummyapi.io/data/v1/user/' . $session['id']);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('app-id:62a1d96b9eb7db738dd3044e'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);
        $decoded = json_decode($response, true);

        $this->session->sess_destroy();
        redirect(site_url(''));
    }
}
