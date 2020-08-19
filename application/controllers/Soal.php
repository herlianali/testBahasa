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
		$data = array(
			'titleMulti' => "Multiple Choice",
			'soalMulti'  => $this->Soal_model->getAll('soalpilihan'),
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
			'id_user' => $this->session->userdata('id'),//nilai masih statis
			'nilaiSP' => $nPilih,
			'jenis'   => "tofle",
		);

		$this->Raport_model->store($data);
		return redirect('soal/listen');
		// echo "nilai multiple choice : ".$nPilih." <br>nilai listening : ".$nListen;

	}

	public function listen()
	{
		$data = array(
			'titleListen' => "Listening ",
			'soalListen' => $this->Soal_model->getAll('soallistening'),
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
			// 'nilaiSL' => $nListen,
			'nilaiSL' => "45",
		);

		$id = $data['id_user'];
		$this->Raport_model->update($data, $id);
		return redirect('dashboard/index');
	}
}
