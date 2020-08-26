<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');

	}

	public function index()
	{
		if ($this->session->userdata('firstName')) {
			redirect('login/index');
		}

		$this->load->view('dashboard/pilihTest');
	}

	public function ielts()
	{
		if ($this->session->userdata('firstName')) {
			redirect('login/index');
		}

		$data = array(
				'display' => 'style="display:none"',
				'notif_message' => '', 
				);
		$this->load->view('login/ielts', $data);
	}

	public function tofle()
	{
		if ($this->session->userdata('firstName')) {
			redirect('login/index');
		}

		$data = array(
				'display' => 'style="display:none"',
				'notif_message' => '', 
				);
		$this->load->view('login/tofle', $data);
	}

	public function auth()
	{
		if ($this->session->userdata('firstName')) {
			redirect('login/index');
		}
		
		$data = array (
						'username'  => $this->input->post('username'),
						'password'  => $this->input->post('password'),
						'jenisTest' => $this->input->post('jenis'),
					  );
		$hasil = $this->Login_model->cekUser('users', $data);
		if ($hasil->num_rows() == 1) {	
			foreach ($hasil->result() as $h) {
				$h_session['id'] = $h->id;
				$h_session['firstName'] = $h->firstName;
				$h_session['lastName']  = $h->lastName;
				$h_session['jenisTest'] = $h->jenisTest;
				$h_session['status'] 	= $h->status;
				$this->session->set_userdata($h_session);
			}
			redirect('dashboard');
		}else{
			$data = array(
					'display' => '',
					'notif_message' => 'username dan password salah',
					);
			if ($this->input->post('jenis') == 'ielts') {
				$this->load->view('login/ielts', $data);
			}elseif ($this->input->post('jenis') == 'tofle') {
				$this->load->view('login/tofle', $data);
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
