<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array('title' => 'Dashboard | ', 
			'fakultas' => $this->m_registration->get_all_fak(),
			'akademik' => $this->m_registration-> get_akademik($this->session->userdata('nim'))
		);
		$this->load->view('user/html_head',$data);
		$this->load->view('user/content/header');
		$this->load->view('user/content/sidemenu');
		$this->load->view('user/content/dashboard',$data);
		$this->load->view('user/footer');
	}
	public function setDataMahasiswa()
	{
			$input_mahasiswa = array(
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'id_prodi' => ($this->input->post('prodi'))
			);	
			$this->m_mahasiswa->insert($input_mahasiswa);
		$this->session->sess_destroy();
		echo '<script language="javascript">';
		echo 'alert("Update Data Berhasil, Silahkan Login Kembali")';
		echo '</script>';
		redirect('main','refresh');
	}
	public function setPendaftaran()
	{
			$nim = $this->input->post('nim');
			$input_mahasiswa = array(
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('gender'),
				'no_telpon' => $this->input->post('no_telpon'),
				'email' => $this->input->post('email')
			);	
			$this->m_mahasiswa->update($input_mahasiswa, $nim );
			$id = $this->m_mahasiswa->getID($nim)->id_mahasiswa;
			$input_regis = array(
				'id_mahasiswa' => $id,
				'id_jadwal' => $nim,
				'id_nilai' => $nim,
				'status' => 'on hold'
			);
			$this->m_registration->insert($input_regis);
			$input = array('id_jadwal' => $nim );
			$this->m_jadwal->insert($input);
			$input = array('id_nilai' => $nim );
			$this->m_nilai->insert($input);

		echo '<script language="javascript">';
		echo 'alert("Terimakasih, Anda sudah berhasil terdaftar")';
		echo '</script>';
		 redirect('dashboard','refresh');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */