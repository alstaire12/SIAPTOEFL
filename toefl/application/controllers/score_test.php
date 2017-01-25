<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Score_test extends CI_Controller {
	public function index()
	{
		$data = array('title' => 'Skor | ', );
		$this->load->view('user/html_head',$data);
		$this->load->view('user/content/header');
		$this->load->view('user/content/sidemenu');
		$this->load->view('user/content/score_test');
		$this->load->view('user/footer');
	}
}

/* End of file score_test.php */
/* Location: ./application/controllers/score_test.php */ ?>