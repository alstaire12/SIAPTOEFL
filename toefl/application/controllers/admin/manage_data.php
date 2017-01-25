<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_data extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		// if ($this->session->userdata('a_id') == '') {
		// 	redirect('admin/login','refresh');
		// }

		$data = array('title' => 'Data | ', );
		$this->load->view('admin/html_head', $data);
		$this->load->view('admin/content/navbar', $data);
		$this->load->view('admin/content/sidebar', $data);
		$this->load->view('admin/content/manage_data', $data);
		$this->load->view('admin/footer', $data);
	}


}

/* End of file manage_data.php */
/* Location: ./application/controllers/admin/manage_data.php */