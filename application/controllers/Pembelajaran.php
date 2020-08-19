<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelajaran extends CI_Controller {

	public function index()
	{
		$this->load->view('pembelajaran/index');
	}
}
