<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model {
	public function insert($data){
		$this->db->insert('nilai', $data);
	}
}