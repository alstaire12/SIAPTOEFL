<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('a_id') == '') {
			redirect('admin/main/login','refresh');
		}

		$data = array('title' => 'Dashboard | ', );
		$this->load->view('admin/html_head', $data);
		$this->load->view('admin/content/navbar', $data);
		$this->load->view('admin/content/sidebar', $data);
		$this->load->view('admin/content/dashboard', $data);
		$this->load->view('admin/footer', $data);
	}

	public function dashboard()
	{
		// if ($this->session->userdata('a_id') == '') {
		// 	redirect('admin/main/login','refresh');
		// }

		$data = array('title' => 'Dashboard | ', );
		$this->load->view('admin/html_head', $data);
		$this->load->view('admin/content/navbar', $data);
		$this->load->view('admin/content/sidebar', $data);
		$this->load->view('admin/content/dashboard', $data);
		$this->load->view('admin/footer', $data);
	}

	public function login()
	{
		if ($this->session->userdata('a_id')) {
			redirect('admin/main','refresh');
		} 
		$data = array('title' => 'Login | ', );
		$this->load->view('admin/plugins/css/login');
		$this->load->view('admin/html_head', $data);
		$this->load->view('admin/content/login', $data);
		$this->load->view('admin/footer', $data);
	}

	public function login_process()
	{
		$login_check = $this->administrators_model->login(
			$this->input->post('login_id'),
			md5($this->input->post('password'))
		);

		if ($login_check) {
			$sess_array = array(
				'a_id' => $login_check->id_admin,
				'a_username' => $login_check->username
			);
			$this->session->set_userdata($sess_array);
			redirect('admin/','refresh');
		} else {
			$this->session->set_flashdata('warn', 'Username atau password yang kamu masukkan salah.');
			redirect('admin/main/login','refresh');
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/main','refresh');
	}

}

/* End of file index.php */
/* Location: ./application/controllers/admin/index.php */