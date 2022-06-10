<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array());
        $this->load->library(array());
        $this->load->model(array());

        $this->site->side = 'frontend';
        $this->site->template = 'default';

        $this->site->is_logged_in();
    }
}
