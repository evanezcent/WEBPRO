<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {

	//COMPLETE ALL FUNCTION IN HERE
	
	public function GetMahasiswa_nim(){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('jurusan','jurusan.id_jurusan=mahasiswa.id_jurusan','LEFT OUTER');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getjurusan_nim(){
		$this->db->select('*');
		$this->db->from('jurusan');
		$query = $this->db->get();
		return $query->result();
	}


	//COMPLETE ALL FUNCTION IN HERE

	//FUNCTION TO DELETE MAHASISWA
	public function hapus_mahasiswa($nim)
	{
		$this->db->where('nim',$nim);
		$this->db->delete('mahasiswa');
	}

	//FUNCTION TO DELETE EDIT
	public function edit_mahasiswa($nim,$data)
	{
		$this->db->where('nim',$nim);
		$this->db->update('mahasiswa', $data);
	}

	//FUNCTION TO ADD MAHASISWA
	public function tambah_mahasiswa($data)
	{
		$this->db->insert('mahasiswa', $data);
	}


	//FUNCTION TO DELETE MAJORS

	public function hapus_jurusan($id_jurusan)
	{
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->delete('jurusan');
	}


	//FUNCTION TO EDIT MAJORS
	public function edit_jurusan($id_jurusan,$data)
	{
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->update('jurusan', $data);
	}


	//FUNCTION TO ADD MAJORS
	public function tambah_jurusan($data)
	{
		$this->db->insert('jurusan', $data);
	}



}
