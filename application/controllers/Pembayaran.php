<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}
		$this->load->view('payment/index');
	}

	
}
