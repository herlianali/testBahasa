<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Raport_model');
	}

	public function index()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}

		$id   = $this->session->userdata('id');
		$name = $this->session->userdata('firstName')." ".$this->session->userdata('lastName');

		$data = array(
				'raport' => $this->Raport_model->getBy($id),
				'name'	 => $name,
		);
		
		$this->load->view('dashboard/index', $data);
	}
}
