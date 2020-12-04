<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller
{

    protected $data = array();
    function __construct()
    {
        parent::__construct();

    }


    function index()
    {

        $this->load->view('template/Recipe_Template');
    }

    public function layout(){
        $this->template['header'] = $this->load->view('template/header'.$this->data, TRUE);
        $this->template['footer'] = $this->load->view('template/footer'.$this->data, TRUE);
        $this->template['Recipe_Template'] = $this->load->view('template/Recipe_Template'.$this->data, TRUE);

    }
}
