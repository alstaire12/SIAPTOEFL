<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_registration extends CI_Model {

	public function login($nim, $password)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('nim', $nim);
		$this->db->where('password', $password);

		$query = $this->db->get();
		if ($query->num_rows > 0) {
			return $query->row(); //true
		} else {
			return false;
		}
	}

	public function insert($data){
		$this->db->insert('pendaftaran', $data);
	}	

	public function get_akademik($nim)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('program_studi', 'mahasiswa.id_prodi = program_studi.id_prodi', 'join');
		$this->db->join('jurusan', 'program_studi.id_jurusan = jurusan.id_jurusan', 'join');
		$this->db->join('fakultas', 'jurusan.id_fakultas = fakultas.id_fakultas', 'join');
		$this->db->where('mahasiswa.nim', $nim);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function get_all_fak() {
		$this->db->select('*');
		$this->db->from('fakultas');

		$query = $this->db->get();
		return $query->result();
	}

	public function get_pendaftar() {
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('status', 'belum terjadwal');

		$query = $this->db->get();
		return $query->num_rows();
	}

	public function show_where_fac($where_value){
		$this->db->select('*');
		$this->db->from('jurusan ');
		$this->db->join('fakultas', 'jurusan.id_fakultas = fakultas.id_fakultas', 'left');
		$this->db->where('jurusan.id_fakultas', $where_value);
		
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function show_where_jur($where_value) {
		$this->db->select('*');
		$this->db->from('program_studi');
		$this->db->join('jurusan', 'program_studi.id_jurusan = jurusan.id_jurusan', 'left');
		$this->db->where('program_studi.id_jurusan', $where_value);
		
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}

	}
	public function getPerUser($id)
	{
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('program_studi', 'mahasiswa.id_prodi = program_studi.id_prodi', 'left');
		$this->db->join('jurusan', 'program_studi.id_jurusan = jurusan.id_jurusan', 'left');
		$this->db->join('fakultas', 'jurusan.id_fakultas = fakultas.id_fakultas', 'left');
		$this->db->where('mahasiswa.id_mahasiswa', $id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	// public function search($keyword){
	// 	$this->db->select('*');
	// 	$this->db->from('user');
	// 	$thid->db->like('username', $keyword);

	// 	$query = $this->db->get();
	// 	if ($query->num_rows > 0) {
	// 		return $query->result();
	// 	}
	// 	else {
	// 		return false;
	// 	}
	// }

	// public function insert($data)
	// {
	// 	$this->db->insert('user', $data);
	// }	

	// public function delete($where)
	// {
	// 	$this->db->where('username', $where);
	// 	$this->db->delete('user');
	// }

		
	// public function get($where_what,$where)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('m_mahasiswa');
	// 	$this->db->where($where_what, $where);

	// 	$query = $this->db->get();
	// 	if ($query->num_rows() > 0) {
	// 		return $query->row();
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function get($nim)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('mahasiswa');
	// 	$this->db->where('nim', $nim);

	// 	$query = $this->db->get();
	// 	if ($query->num_rows() > 0) {
	// 		return $query->row();
	// 	} else {
	// 		return false;
	// 	}
		
	// }




}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */