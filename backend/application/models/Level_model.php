<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
        $data_kategori= $this->db->get('level')->result();
        return $this->db->get('level');
        
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
