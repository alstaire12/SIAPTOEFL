<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrators_model extends CI_Model {

	public function login($user_id,$password)
	{
		$datestring = '%Y-%m-%d %h:%i:%s';

		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $user_id);
		$this->db->having('password', $password);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$update_time = array('last_active' => mdate($datestring,now()));
			
			$this->db->where('username', $user_id);
			$this->db->update('admin',$update_time);

			return $query->row();
		} else {
			return false;
		}
	}

	public function check_entry($where_what,$where)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where($where_what, $where);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('admin');

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function get($where)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $where);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function delete($where)
	{
		$this->db->where('id_admin', $where);
		$this->db->delete('admin');
	}

	public function update($data,$where)
	{
		$this->db->where('id_admin', $where);
		$this->db->update('admin', $data);
	}

	public function insert($data)
	{
		$this->db->insert('admin', $data);
	}

}

/* End of file administrators_model.php */
/* Location: ./application/models/administrators_model.php */