<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model

{
	public function queries()
	{
		$query = $this->db->get('listings');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return [];
		}
	}
}
