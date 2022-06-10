<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site
{
    public $side;
    public $template;

    function view($pages, $data = NULL)
    {
        $_this = &get_instance();

        $data ?
            $_this->load->view($this->side . '/' . $this->template . '/' . $pages, $data) :
            $_this->load->view($this->side . '/' . $this->template . '/' . $pages);
    }

    function is_logged_in()
    {
        $_this = &get_instance();

        $user_session = $_this->session->userdata;

        if ($this->side == 'backend') {
            if (!isset($user_session['logged_in'])) {
                $_this->session->sess_destroy();
                redirect(site_url('login'));
            }
        }

        if ($this->side == 'frontend') {
            if (isset($user_session['logged_in'])) {
                redirect(site_url('dashboard'));
            }
        }
    }
}
