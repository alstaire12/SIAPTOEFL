<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => '');
		$this->load->view('user/html_head',$data);
		$this->load->view('user/content/header');
		$this->load->view('user/content/home');
		$this->load->view('user/footer');
	}

	public function loginProcess()
	{
		$nim = $this->input->post('nim');
    	$password = md5($this->input->post('password'));

		    $user = $this->m_mahasiswa->login($nim, $password);

		    if ($user) { //login berhasil, pengecekkan berhasil
		      $nama = $this->m_mahasiswa->getByName($user->nim);
		      	$array = array(
		        'nim' => $user->nim,
		        'password' => $user->password,
		        'id_mahasiswa' => $user->id_login,
		        'nama'=> $nama
		      );
		      $this->session->set_userdata($array);
		      redirect('dashboard','refresh');
		    } else {
		      $this->session->set_flashdata('message', 'Username atau password salah');
		      redirect('main','refresh');
		    }
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main','refresh');
	}
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */ ?>