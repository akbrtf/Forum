<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function show()
    {
      return $this->db->get('pesan')->result();
    }
  }
  ?>
