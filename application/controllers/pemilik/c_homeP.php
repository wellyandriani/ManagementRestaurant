<?php 
session_start();
error_reporting("Anda Belum Login!!!");
class c_homeP extends CI_Controller {

	function __construct() {
		parent::__construct();
		if ($this->session->userdata('id_karyawan')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
	function index() {
		$data['id_karyawan'] = $this->session->userdata('id_karyawan');
		$data['password'] = $this->session->userdata('password');
		$this->load->view('pemilik/homeP', $data);
	}
	
	function logout() {
		$this->session->unset_userdata('id_karyawan');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('user');
		session_destroy();
		redirect('login');
	}
}
?>