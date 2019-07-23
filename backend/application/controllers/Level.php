<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller
{
    private $folder = 'level/';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $this->load->model('level_model');
        $data['data_level']=$this->level_model->show()->result();
        $this->load->view($this->folder . 'list', $data);
    }

    public function add()
    {
        $data = array();
        $this->load->view($this->folder . 'add', $data);
    }

    public function add_process()
    {
    }

    public function edit()
    {
        $data = array();
        $this->load->view($this->folder . 'edit', $data);
    }

    public function edit_process()
    {
    }

    public function delete()
    {

    }
}
