<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Soal_model');
		$this->load->model('Raport_model');
		$this->load->helper('url');
	}

	public function index()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}

		$jenis = $this->session->userdata('jenisTest');
		
		$data = array(
			'titleMulti' => "Multiple Choice",
			'soalMulti'  => $this->Soal_model->getAll('soalpilihan'),
			'test'		 => $jenis
		);

		$this->load->view('soal/index', $data);
	}

	public function toflePilihanProses()
	{

		$pilihan = $this->Soal_model->getAll('soalpilihan');
		$nPilih = 0;
		foreach ($pilihan as $key) {
			if ($this->input->post("jawaban".$key->id) == $key->jawaban) {
				$nPilih = $nPilih + $key->point;
			}else{
				$nPilih = $nPilih + 0;
			}
		}

		$data = array(
			'id_user' => $this->session->userdata('id'),
			'nilaiSP' => $nPilih,
			'jenis'   => "tofle",
		);

		$this->Raport_model->store($data);
		return redirect('soal/listen');

	}

	public function listen()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}

		$jenis = $this->session->userdata('jenisTest');

		$data = array(
			'titleListen' => "Listening",
			'soalListen'  => $this->Soal_model->getAll('soallistening'),
			'voice'		  => $this->Soal_model->voiceGet($jenis),
			'test'		  => $jenis,
		);
		$this->load->view('soal/listen', $data);
	}

	public function tofleListenProses()
	{
		$listening = $this->Soal_model->getAll('soallistening');
		$nListen = 0;
		foreach ($listening as $l) {
			if ($this->input->post("jawaban".$l->id) == $l->jawaban) {
				$nListen = $nListen + $l->point;
			}else{
				$nListen = $nListen + 0;
			}
		}

		$data = array(
			'id_user' => $this->session->userdata('id'),
			'nilaiSL' => $nListen,
		);

		$id = $data['id_user'];
		$this->Raport_model->update($data, $id);
		if ($this->session->userdata('jenisTest') == "ielts") {
			return redirect('soal/essay');
			// echo "ielts";
		}else{
			return redirect('dashboard');
			// echo "kosong";
		}
	}

	public function essay()
	{
		if (empty($this->session->userdata('firstName'))) {
			redirect('login');
		}

		$jenis = $this->session->userdata('jenisTest');

		$data = array(
			'titleEssay' => "Essay",
			'soalEssay'  => $this->Soal_model->getAll('soalessay'),
			'test'		  => $jenis,
		);
		$this->load->view('soal/essay', $data);
	}

	public function tofleEssayProses()
	{
		$essay = $this->Soal_model->getAll('soalessay');
		$nEssay = 0;
		foreach ($essay as $e) {
			// $jawaban = $this->input->post('jawaban');
			if ($this->input->post("jawaban".$e->id) == $e->jawaban) {
				$nEssay = $nEssay + $e->point;
			}else{
				$nEssay = $nEssay + 0;
			}
		}

		$data = array(
			'id_user' 	 => $this->session->userdata('id'),
			'nilaiSE' 	 => $nEssay,
			'statusTest' => 'sudah',
		);

		$id = $data['id_user'];
		$this->Raport_model->update($data, $id);
		return redirect('dashboard');
	}
}
