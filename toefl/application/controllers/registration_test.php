<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_test extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data = array(
			'title' => 'Pendaftaran | ',
			'akademik' => $this->m_registration->get_akademik($this->session->userdata('nim')),
			'fakultas' => $this->m_registration->get_all_fak()
		);
		$this->load->view('user/html_head',$data);
		$this->load->view('user/content/header',$data);
		$this->load->view('user/content/sidemenu',$data);
		$this->load->view('user/content/registration_test',$data);
		$this->load->view('user/footer',$data);
	}

	public function getFakultas(){
		$id_fakultas = $_GET['id_fakultas'];
		$jurusan_list = $this->m_registration->show_where_fac($id_fakultas);
		
		echo "<option>Pilih Jurusan</option>";
		foreach ($jurusan_list as $jur) { ?>
			<option value="<?php echo $jur->id_jurusan ?>"><?php echo $jur->jurusan ?></option>
		<?php }
	}

	public function getProgstud() {
		$id_jurusan = $_GET['id_jurusan'];
		$progstud_list = $this->m_registration->show_where_jur($id_jurusan);
		
		echo "<option>Pilih Program Studi</option>";
		foreach ($progstud_list as $prog) { ?>
			<option value="<?php echo $prog->id_prodi ?>"><?php echo $prog->program_studi ?></option>
		<?php }	
	}

	public function getDetail($id_mahasiswa){
		$data = array('u_fakultas' => $this->m_registration->getperuser($id_mahasiswa));
	}

	

	

	// public function detail($nim)
	// {
	// 	$mhs_detail = $this->mahasiswa->get('nim',$nim);
	// 	if ($this->session->userdata('id')!==$mhs_detail->id_mahasiswa ) {
	// 		redirect('registration_test'.$mhs_detail->id_mahasiswa.'/'.$mem_detail->nim,'refresh');
	// 	}
		
	// 	$data = array(
	// 		'title' => $mhs_detail->nama.' | ',
	// 		'mem_detail' => $mhs_detail,
	// 		'waktu_pendaftaran' => $this->registration->get_sold_rows($mem_detail->id_mahasiswa),
	// 		'batch' => $this->schedule->get_batch_rows($mhs_detail->id_mahasiswa),
	// 		'bids_out' => $this->schedule->get_per_bidder_rows($mhs_detail->id_mahasiswa),
	// 		'bids_in' => $this->bids_model->get_per_auctioneer_rows($mhs_detail->id_mahasiswa),
	// 		'header_categories' => $this->header_categories
	// 	);	

	// 	$this->load->view('html_head', $data);
	// 	$this->load->view('header', $data);
	// 	$this->load->view('content/mem-detail', $data);
	// 	$this->load->view('content/mem-aside-summary', $data);
	// 	$this->load->view('footer', $data);	
	// }

}


/* End of file registration_test.php */
/* Location: ./application/controllers/registration_test.php */