<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelajaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mentor_model');
	}

	public function index()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}

		$data = array(
				'mentor' 	=> $this->Mentor_model->getAll('mentor'),
				'site_file' => "Mentor List",
		);
		
		$this->load->view('pembelajaran/index', $data);
	}

	
}
