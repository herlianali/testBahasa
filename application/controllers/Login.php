<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function ielts()
	{
		$data = array(
				'display' => 'style="display:none"',
				'notif_message' => '',
				);
		$this->load->view('login/ielts', $data);
	}

	public function tofle()
	{
		$this->load->view('login/tofle');
	}

	public function login()
	{
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
				$h_session['lastName'] = $h->lastName;
				$h_session['jenisTest'] = $h->jenisTest;
				$this->session->set_userdata($h_session);
			}
			redirect('dashboard');
		}else{

			$data = array(
					'display' => '',
					'notif_message' => 'username dan password salah',
					);
			$this->load->view('login/ielts', $data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}

}
