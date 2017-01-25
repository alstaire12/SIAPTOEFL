<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {
	public function insert($data){
		$this->db->insert('jadwal', $data);
	}

	public function getJadwal($nim){
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_jadwal', $nim);

		$query = $this->db->get();
		if ($query->num_rows > 0) {
			return $query->row(); //true
		} else {
			return false;
		}
	}
}