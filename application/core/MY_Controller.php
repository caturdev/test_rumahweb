<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $data = array();

    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('template_helper'));
        $this->load->library(array('Site', 'session', 'form_validation'));
        $this->load->model(array());
    }
}
