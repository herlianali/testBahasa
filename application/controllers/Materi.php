<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Materi_model');
	}

	public function name($name)
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}

		$data = array(
				'materi' 	=> $this->Materi_model->getBy($name),
				'site_file' => "Materi List",
		);
		
		$this->load->view('pembelajaran/materi', $data);
	}
}
