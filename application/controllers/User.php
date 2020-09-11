<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url');
	}


	public function index()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}
		
		$this->load->view('login/index');
	}

	public function store()
	{
		$data = array(
			'firstName' => $this->input->post("first_name"),
			'lastName'  => $this->input->post("last_name"),
			'email'	    => $this->input->post("email"),
			'phone'	    => $this->input->post("nomer"),
			'jenisTest' => $this->input->post("jenis"),
			'username'  => $this->input->post("username"),
			'password'  => $this->input->post("password"),
			'status'  	=> 'gratis',
		);

		// return var_dump($data);
		$this->User_model->store($data);
		$this->session->set_flashdata('Success', '<div class="alert alert-success alert-dismissible"> Selamat Datang di web Test Bahasa Arjuna Operasion. </div>');
		redirect('dashboard');
	}

	public function pembayaran()
	{

	}
}
