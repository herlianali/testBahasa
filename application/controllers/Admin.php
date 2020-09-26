<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Soal_model');
		$this->load->model('Mentor_model');
		$this->load->model('Materi_model');
		$this->load->model('hargaPembelajaran_model');
		$this->load->helper('form','url');
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function login()
	{
		$data = array (
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
					  );
		$hasil = $this->Login_model->cekUser('admin', $data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $h) {
				$h_session['id'] = $h->id;
				$h_session['username'] = $h->username;
				$this->session->set_userdata($h_session);
			}
			redirect('admin/dashboard');
		}else{

			$data = array(
					'display' => '',
					'notif_message' => 'username dan password salah',
					);
			$this->load->view('admin/index', $data);
		}
		
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}

	public function cTest()
	{
		$this->load->view('admin/createTest');
	}

	// blok soalpilian
	public function storeSP()
	{
		$data = array(
			'isi_soal'    => $this->input->post("isi"),
			'a'  		  => $this->input->post("a"),
			'b'	    	  => $this->input->post("b"),
			'c'  		  => $this->input->post("c"),
			'd'  		  => $this->input->post("d"),
			'jawaban'  	  => $this->input->post("jawaban"),
			'point'  	  => $this->input->post("point"),
			'jenis_test'  => $this->input->post("jenis"),
		);

		$this->Soal_model->store("soalpilihan",$data);
		$this->session->set_flashdata('Success', '<div class="alert alert-success alert-dismissible"> Data Berhasil Disimpan. </div>');
		redirect('admin/cTest');
	}

	public function hapusSP($id)
	{
		$this->Soal_model->delete('soalpilihan',$id);
		redirect('admin/eTest');
	}

	public function editSP($id)
	{
		$data = array(
			'isi_soal'    => $this->input->post("isi"),
			'a'  		  => $this->input->post("a"),
			'b'	    	  => $this->input->post("b"),
			'c'  		  => $this->input->post("c"),
			'd'  		  => $this->input->post("d"),
			'jawaban'  	  => $this->input->post("jawaban"),
			'point'  	  => $this->input->post("point"),
			'jenis_test'  => $this->input->post("jenis"),
		);

		$this->Soal_model->update('soalpilihan', $data, $id);
		redirect('admin/eTest');
	}
	// end blok of soalpilihan

	// blok of soallistening
	public function storeL()
	{
		$data = array(
			'a'  		  => $this->input->post("a"),
			'b'	    	  => $this->input->post("b"),
			'c'  		  => $this->input->post("c"),
			'd'  		  => $this->input->post("d"),
			'jawaban'  	  => $this->input->post("jawaban"),
			'point'  	  => $this->input->post("point"),
			'jenis_test'  => $this->input->post("jenis"),
		);

		$this->Soal_model->store("soallistening",$data);
		$this->session->set_flashdata('Success', '<div class="alert alert-success alert-dismissible"> Data Berhasil Disimpan. </div>');
		redirect('admin/cTest');
	}

	public function hapusL($id)
	{
		$this->Soal_model->delete('soallistening',$id);
		redirect('admin/eTest');
	}

	public function editL($id)
	{
		$data = array(
			'a'  		  => $this->input->post("a"),
			'b'	    	  => $this->input->post("b"),
			'c'  		  => $this->input->post("c"),
			'd'  		  => $this->input->post("d"),
			'jawaban'  	  => $this->input->post("jawaban"),
			'point'  	  => $this->input->post("point"),
			'jenis'  	  => $this->input->post("jenis"),
		);

		$this->Soal_model->update('soallistening', $data, $id);
		redirect('admin/eTest');
	}
	// end of soal listening

	// blok of essay
	public function storeE()
	{
		$data = array(
			'soal' 	  => $this->input->post("soal"),
			'jawaban' => $this->input->post("jawaban"),
			'point'   => $this->input->post("point"),
		);

		$this->Soal_model->store("soalessay",$data);
		$this->session->set_flashdata('Success', '<div class="alert alert-success alert-dismissible"> Data Berhasil Disimpan');
		redirect('admin/cTest');
	}

	public function hapusE($id)
	{
		$this->Soal_model->delete('soalessay',$id);
		redirect('admin/eTest');
	}

	public function editE($id)
	{
		$data = array(
			'soal' 	  => $this->input->post("soal"),
			'jawaban' => $this->input->post("jawaban"),
			'point'	  => $this->input->post("point"),
		);

		$this->Soal_model->update('soalessay', $data, $id);
		redirect('admin/eTest');
	}
	// end of blok essay

	// belum bisa creat update
	function uploadFile()
	{
		$this->load->helper('string');
		$randomString = random_string('alpha', 32);
		$config['upload_path'] = './asset/audio';
		$config['allowed_types'] = 'pcm|wav|aiff|mp3|aac';
		$config['file_name'] = 'post_'.time().'_'.$randomString;
		$config['max_size'] = '102400000';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);
		$fileUp = $this->upload->do_upload('voice');

		if ($fileUp) {
			return $file = $config['file_name'];
		}

		// print_r(array('error' => $this->upload->display_errors()));
	}

	public function uploadTof()
	{
		$data = array(
			'voice' 	 => $this->uploadFile(),
			'status' 	 => 'tidak aktif',
			'jenis_test' => $this->input->post('jenis'),
		);
		$this->Soal_model->store('listening', $data);
		redirect('admin/cTest');
	}

	public function hapusVoi($id)
	{
		$this->Soal_model->delete('listening',$id);
		redirect('admin/eTest');
	}

	public function statusVoi($id)
	{
		$data = array(
			'status' => $this->input->post('status'),
		);
		$this->Soal_model->voice('listening', $data, $id);
		redirect('admin/eTest');
	}

	public function eTest()
	{
		$data = array(
			'pilihanIelts' 	 => $this->Soal_model->getWhere('soalpilihan', 'ielts'),
			'essayIelts'	 => $this->Soal_model->getAll('soalessay'),
			'listeningIelts' => $this->Soal_model->getWhere('soallistening', 'ielts'),
			'voiceIelts' 	 => $this->Soal_model->getWhere('listening', 'ielts'),
			'pilihanTofle' 	 => $this->Soal_model->getWhere('soalpilihan', 'tofle'),
			'listeningTofle' => $this->Soal_model->getWhere('soallistening', 'tofle'),
			'voiceTofle' 	 => $this->Soal_model->getWhere('listening', 'tofle'),
		);
		$this->load->view('admin/editTest',$data);
	}


// learn block
	public function learn()
	{
		$data = array('learn' => $this->Materi_model->getAll('materi'),);
		$this->load->view('admin/learn',$data);
	}

	public function inputLearn()
	{
		$data = array(
			'judul'		  => $this->input->post("title"),
			'nama_mentor' => $this->input->post("mentor"),
			'link' 		  => $this->input->post("link"),
			'keterangan'  => $this->input->post("information"),
		);

		$this->Materi_model->input('materi',$data);
		redirect('admin/learn');
	}

	public function hapusLearn($id)
	{
		$this->Materi_model->delete('materi', $id);
		redirect('admin/learn');
	}

	public function editLearn($id)
	{
		$data = array(
			'judul'		  => $this->input->post("title"),
			'nama_mentor' => $this->input->post("mentor"),
			'link' 		  => $this->input->post("link"),
			'keterangan'  => $this->input->post("information"),
		);

		$this->Materi_model->edit('materi',$id, $data);
		redirect('admin/learn');
	}
// end of learn block


// mentor block
	public function mentor()
	{
		$data = array(
			'mentor' => $this->Mentor_model->getAll('mentor'),
		);
		$this->load->view('admin/mentor',$data);
	}
	
	function _uploadImage()
	{
		$image = null;
		$config['upload_path'] = './asset/images/profile/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '2024';
		$config['overwrite'] = true;
		$config['file_ext'] = '.jpg';

		$this->load->library('upload', $config);
		$imageUp = $this->upload->do_upload('image');

		if ($imageUp) {
			return $image = $_FILES['image']['name'];
		}else{
			return "user.png";
		}

	}

	public function inputMentor()
	{

		$data = array(
			'nama'      => $this->input->post("nama"),
			'alamat'    => $this->input->post("alamat"),
			'nomer_tlp' => $this->input->post("nomor"),
			'photo'		=> $this->_uploadImage(),
		);

		$this->Mentor_model->input('mentor',$data);
		redirect('admin/mentor');

	}

	public function hapusMentor($id)
	{
		$this->Mentor_model->delete('mentor', $id);
		redirect('admin/mentor');
	}

	public function editMentor($id)
	{
		if (!empty($_FILES['image']['name'])) {
			$image = $this->_uploadImage();
		}else{
			$image = $this->input->post("image_old");
		}

		$data = array(
			'nama'      => $this->input->post("nama"),
			'alamat'    => $this->input->post("alamat"),
			'nomer_tlp' => $this->input->post("nomor"),
			'photo'		=> $image,
		);
		$this->Mentor_model->edit('mentor',$id, $data);
		redirect('admin/mentor');
	}
	// end of mentor block
	// upload file nggak bisa


	// blok setting pembayaran
	public function listSetPembayaran()
	{
		$data = array(
			'pembayaran' => $this->hargaPembelajaran_model->getAll("hargaPembelajaran"),
		);

		$this->load->view('admin/hargaPembelajaran', $data);
	}

	public function hapusSetPembayaran($id)
	{
		$this->hargaPembelajaran_model->delete("hargaPembelajaran",$id);
		redirect('admin/listSetPembayaran');
	}

	public function editSetPembayaran($id)
	{
		$data = array(
			'nama_paket' => $this->input->post("nama"),
			'kelebihan'  => $this->input->post("kelebihan"),
			'harga'		 => $this->input->post("harga"),
		);

		$this->hargaPembelajaran_model->edit("hargaPembelajaran", $id, $data);
		redirect("admin/listSetPembayaran");
	}

	public function inputSetPembayaran()
	{
		$data = array(
			'nama_paket' => $this->input->post("nama"),
			'kelebihan'  => $this->input->post("kelebihan"),
			'harga'		 => $this->input->post("harga"),
		);

		$this->hargaPembelajaran_model->input("hargaPembelajaran",$data);
		redirect("admin/listSetPembayaran");
	}
	// end of setting pembayaran blok

	public function pembayaranSet()
	{
		$this->load->view('admin/pembayaran');
	}

}
