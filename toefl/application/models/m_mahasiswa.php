<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	public function login($nim, $password)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('nim', $nim);
		$this->db->where('password', $password);

		$query = $this->db->get();
		if ($query->num_rows > 0) {
			return $query->row(); //true
		} else {
			return false;
		}
	}
	public function getID($nim){
		$this->db->select('id_mahasiswa');
		$this->db->from('mahasiswa');
		$this->db->where('nim', $nim);

		$query = $this->db->get();
		if ($query->num_rows > 0) {
			return $query->row(); //true
		} else {
			return false;
		}
	}

	public function getData($nim){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->where('nim', $nim);

		$query = $this->db->get();
		if ($query->num_rows > 0) {
			return $query->row(); //true
		} else {
			return false;
		}
	}

	public function insert($data){
		$this->db->insert('mahasiswa', $data);
	}

	public function update($data, $nim){
		$this->db->where('nim',$nim);
		$this->db->update('mahasiswa', $data);
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

	// 
	// public function delete($where)
	// {
	// 	$this->db->where('username', $where);
	// 	$this->db->delete('user');
	// }

	// public function get_all()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('user');
	// 	$query= $this->db->get();
		
	// 	return $query->result();

	// }

	public function getByName($nim)
	{
		$this->db->select('nama');
		$this->db->from('mahasiswa');
		$this->db->join('login', 'mahasiswa.nim = login.nim', 'left');
		$this->db->where('mahasiswa.nim', $nim);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}


}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */