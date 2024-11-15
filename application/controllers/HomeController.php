<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	public function index()
	{
		$this->load->model('HomeModel');
		$data['listings'] = $this->HomeModel->queries();
		
		$this->load->view('home_page', $data);
	}
}
