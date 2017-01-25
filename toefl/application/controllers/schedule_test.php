<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_test extends CI_Controller {
	public function index()
	{
		$data = array('title' => 'Jadwal | ', 
			'Data' => $this->m_mahasiswa-> getData($this->session->userdata('nim')),
			'Jadwal' => $this->m_jadwal-> getJadwal($this->session->userdata('nim'))
		);
		$this->load->view('user/html_head',$data);
		$this->load->view('user/content/header');
		$this->load->view('user/content/sidemenu');
		$this->load->view('user/content/schedule_test');
		$this->load->view('user/footer');
	}

	public function setJadwal()
	{

	}

}

/* End of file schedule_test.php */
/* Location: ./application/controllers/schedule_test.php */ ?>