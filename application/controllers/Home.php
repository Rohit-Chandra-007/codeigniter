<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$params = 0;
		//	$var['name'] = "Rohit";
		$this->load->model('homemodel');
		if (isset($this->homemodel)) {
			$params = $this->homemodel->queries();
		}
		$data['listings'] = $params;
		$this->load->view('home_view', $data);
	}

	public function myfunction()
	{
		echo '<p>The rise of urban centers during the second urbanization marked a significant phase in ancient Indian history. Driven by agricultural surplus, trade, and iron technology, these urban centers became hubs of economic, cultural, and political activities. They laid the groundwork for subsequent empires, setting the stage for India’s long-standing urban and economic traditions. These developments not only shaped the socio-political landscape of ancient India but also fostered a legacy of cultural and economic interconnectivity that continues to influence the subcontinent. </p>';

	}
}
