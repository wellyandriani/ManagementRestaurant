<?php 
session_start();
class c_homeKa extends CI_Controller {
function __construct(){
parent::__construct();
if ($this->session->userdata('id_karyawan')=="") {
			redirect('login');
}

$this->load->helper('text');
}
	public function index()
	{
		$data['id_karyawan'] = $this->session->userdata('id_karyawan');
		$data['password'] = $this->session->userdata('password');
		$this->load->view('kasir/homeKa');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */