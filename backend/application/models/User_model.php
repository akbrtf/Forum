<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        $data_kategori= $this->db->get('user')->result();
        return $this->db->get('user');
        
    }

    public function show_by_id()
    {
    }

    public function data_add()
    {
    }

    public function data_edit()
    {
    }

    public function data_delete()
    {
    }
}