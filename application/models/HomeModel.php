<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
    public function queries()
    {

        $query = $this->db->get('listings');
      
        return $query->result();
    }
}
