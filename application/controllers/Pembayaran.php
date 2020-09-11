<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('HargaPembelajaran_model');
	}

	public function index()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}

		$id = $this->session->userdata('id');

		$data = array(
			'userData' => $this->User_model->getBy($id),
		);
		$this->load->view('payment/index', $data);
	}

	public function payment($id)
	{

		$harga 	 = $this->HargaPembelajaran_model->getBy($id);
		$id_user = $this->session->userdata('id');

		foreach ($harga as $key) {
			$price = $key->harga;
		}

		$view = array(
			'userData' => $this->User_model->getBy($id_user),
		);

		$this->load->view('payment/dataLanjutan', $view);

		if (!isset($_POST['send'])) {
			echo "belum";
		}else{
			// "sudah dipencet";
			$data = array(
				'firstName' 	=> $this->input->post('firstName'),
				'lastName'  	=> $this->input->post('lastName'),
				'email'			=> $this->input->post('email'),
				'address'		=> $this->input->post('address'),
				'phone'			=> $this->input->post('phone_number'),
				'dateBirth'		=> $this->input->post('DOB'),
				'education'		=> $this->input->post('education'),
				'photo'			=> $this->input->post('photo'),
				'id_harga'		=> $price,
			);

			

		}
	}
	
}
