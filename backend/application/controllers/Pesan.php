<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
          $this->load->model('pesan_model');
          $this->load->helper('url');
    }

    public function index()
    {
        $data = array();


          $data['result_pesan'] = $this->pesan_model->show();


          $this->load->view('pesan/list',$data);
          // $this->load->view($this->folder . 'list',$data);

        }

  //**  public function add()
  //**  {
  //**      $data = array();
      //**  $this->load->view($this->folder . 'add', $data);
    //** }

  //**  public function add_process()
    //**{
  //**  }

//**    public function edit()
//**    {
//**        $data = array();
//**        $this->load->view($this->folder . 'edit', $data);
//**    }

//**    public function edit_process()
//**    {
//**    }
//**
//**    public function delete()
  //**  {

    //**}
}
