<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {

	public function GetMahasiswa_1301170073(){
		$this->db->select('mahasiswa.nim, mahasiswa.nama, mahasiswa.kelas, jurusan.nama_jurusan, jurusan.fakultas, mahasiswa.foto')
			->from('mahasiswa')->join('jurusan','jurusan.id_jurusan = mahasiswa.id_jurusan');

		$query = $this->db->get();

		return $query->result();

		
	}
	public function Getjurusan_1301170073(){
		$this->db->select('jurusan.nama_jurusan, jurusan.fakultas, jurusan.akreditasi, count(mahasiswa.nim) as jumlah')
			->from('jurusan')->join('mahasiswa','mahasiswa.id_jurusan = jurusan.id_jurusan')->group_by('jurusan.nama_jurusan, jurusan.fakultas, jurusan.akreditasi');

		$query = $this->db->get();
		return $query->result();

	}
}

