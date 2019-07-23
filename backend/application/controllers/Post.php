<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
          $this->load->model('post_model');
          $this->load->helper('url');
    }

    public function index()
    {
        $data = array();


          $data['result_post'] = $this->post_model->show();


         $this->load->view('post/list',$data);
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
