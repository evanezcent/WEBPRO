<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
		parent::__construct();
		/*
			..:: QUESTION ::.. 
			Doing Load Model M_web
		*/
		$this->load->model('m_web');

	}
		
	/*
		..:: QUESTION ::.. 
		Define the assosiative array $data
		[YOUR_STUDENT_ID (int), YOUR_NAME (str), YOUR_CAMPUS (str)]
	*/
	// YOUR_CODE_HERE
	public $data = array(
		"nim" => 1301170073,
		"nama" => 'Tama',
		"kampus"=> 'Telkom University'
	);

	public function index()
	{
		/*
		..:: QUESTION ::.. 
		Doing load view page_header, dan page_index
		*/
		// YOUR_CODE_HERE
		$file['data'] = $this->data;
		$this->load->view('page_header',$file);
		$this->load->view('page_index');

	}

	public function mahasiswa()
	{
		/*
		..:: QUESTION ::.. 
		Doing load method Getmahasiswa_nim from M_web Model.
		Doing load view page_header, dan page_mahasiswa, with array data from Getmahasiswa_nim result
		*/
		// YOUR_CODE_HERE
		$file['data'] = $this->data;
		$this->load->view('page_header',$file);
		$mhs['data'] = $this->m_web->GetMahasiswa_1301170073();
		$this->load->view('page_mahasiswa',$mhs);

	}

	public function jurusan()
	{
		/*
		..:: QUESTION ::.. 
		Doing load method Getjurusan_nim from M_web Model.
		Doing load view page_header, dan page_jurusan, with array data from Getjurusan_nim result
		*/
		$file['data'] = $this->data;
		$this->load->view('page_header',$file);
		$jurusan['data'] = $this->m_web->Getjurusan_1301170073();
		$this->load->view('page_jurusan',$jurusan);

	}
}
