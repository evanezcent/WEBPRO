<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
 		// Load M_Web as parents in here.
 		parent::__construct();
 		$this->load->model('m_web');
 		$this->load->library('form_validation');
		$this->load->library('session');
  	}

  	public $data = array(
  		"nim" => "1301170073",
  		"nama" => "Tama",
  		"kampus"=>"Telkom University"
  	);

	public function index()
	{
		//Load page_header and page_index from views
		$file['data'] =  $this->data;
		$this->load->view('page_header',$file);
		$this->load->view('page_index');
	}

	public function mahasiswa()
	{
		$data_mahasiswa = $this->m_web->Getmahasiswa_nim();
		$data_jurusan = $this->m_web->Getjurusan_nim();
		$this->load->view('page_header',['dataJ'=>$data_jurusan]);
		$this->load->view('page_mahasiswa',['data'=>$data_mahasiswa]);
	}

	public function jurusan()
	{
		$data_jurusan = $this->m_web->Getjurusan_nim();
		$this->load->view('page_header');
		$this->load->view('page_jurusan',['data'=>$data_jurusan]);
	}


	#lengkapi FUNCTION BERIKUT
	public function hapusmahasiswa($nim)
	{

		//Load function hapus_mahasiswa from M_web
		// make it to index.php/web/mahasiswa after delete complete
		$this->m_web->hapus_mahasiswa($nim);
		redirect('index.php/web/mahasiswa','refresh');

	}


	public function tambahmahasiswa()
	{
		
		// Create variabel and use it for input data to database.
		// Load tambah_mahasiswa($data) from M_web
		// Redirect to index.php/web/mahasiswa after add data.
		$data = [
			"nim" => $this->input->post('nim', true),
			"nama" => $this->input->post('nama', true),
			"kelas" => $this->input->post('kelas', true),
			"id_jurusan" => $this->input->post('jurusan', true),
		];
		$this->m_web->tambah_mahasiswa($data);
		redirect('index.php/web/mahasiswa','refresh');


	}

	public function editmahasiswa()
	{

		// Create variabel and use it for edit data from database.
		// Load edit_mahasiswa($nim,$data) from M_web
		// Redirect to index.php/web/mahasiswa after edit data.
		$nim = $this->input->post('nim');
		$data = [
			"nama" => $this->input->post('nama'),
			"kelas" => $this->input->post('kelas'),
			"id_jurusan" => $this->input->post('jurusan'),
		];
		$this->m_web->edit_mahasiswa($nim,$data);
		redirect('index.php/web/mahasiswa','refresh');
		


	}


	#lengkapi FUNCTION BERIKUT UNTUK PAGE JURUSAN



	public function tambahjurusan()
	{

		// Create variabel and use it for add data from database.
		// Load tambah_jurusan($data) from M_web
		// Redirect to index.php/web/jurusan after add data.
		$data = [
			"nama_jurusan" => $this->input->post('njurusan'),
			"fakultas" => $this->input->post('nfakultas'),
			"akreditasi" => $this->input->post('akreditasi'),
		];
		$this->m_web->tambah_jurusan($data);
		redirect('index.php/web/jurusan','refresh');

	

	}

	public function editjurusan()
	{

		// Create variabel and use it for add data from database.
		// Load edit_jurusan($id_jurusan,$data) from M_web
		// Redirect to index.php/web/jurusan after add data.
		$id_jurusan = $this->input->post('id_jurusan');
		$data = [
			"nama_jurusan" => $this->input->post('njurusan'),
			"fakultas" => $this->input->post('nfakultas'),
			"akreditasi" => $this->input->post('akreditasi'),
		];
		$this->m_web->edit_jurusan($id_jurusan,$data);
		redirect('index.php/web/jurusan','refresh');
	
	}

	public function hapusjurusan($id_jurusan)
	{

		// Create variabel and use it for add data from database.
		// Load hapus_jurusan($id_jurusan) from M_web
		// Redirect to index.php/web/jurusan after add data.
		$this->m_web->hapus_jurusan($id_jurusan);
		redirect('index.php/web/jurusan','refresh');
	}
}
