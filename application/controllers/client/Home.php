<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index(){
        $this->load->view('templates/h-client');
        $this->load->view('templates/s-client');
        $this->load->view('templates/sample-client');
        $this->load->view('templates/f-client');
    }

    public function sample_form()
    {
        $this->load->view('templates/h-client');
        $this->load->view('templates/s-client');
        $this->load->view('client/form');
        $this->load->view('templates/f-client');
    }
    
}