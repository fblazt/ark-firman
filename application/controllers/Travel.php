<?php

class Travel extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['title'] = 'Arkademy Bali Travel';

		$this->load->view('templates/v_header', $data);
		$this->load->view('contents/v_homepage');
		$this->load->view('templates/v_footer');
	}

	public function about()
	{
		$data['title'] = 'Arkademy Bali Travel | About Us';

		$this->load->view('templates/v_header', $data);
		$this->load->view('contents/v_about');
		$this->load->view('templates/v_footer');
	}

	public function reservation()
	{
		$data['title'] = 'Arkademy Bali Travel | Reservation';

		$this->load->view('templates/v_header', $data);
		$this->load->view('contents/v_reservation');
		$this->load->view('templates/v_footer');
	}
}