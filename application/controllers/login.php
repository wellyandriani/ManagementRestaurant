<?php
session_start();
class login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}
	function index() {
		$this->load->view('login');
	}

	function cek_login() {
		$data = array('id_karyawan' => $this->input->post('id_karyawan', TRUE),
						'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('m_login'); // load model_user
		$hasil = $this->m_login->cek_user($data);
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_karyawan'] = $sess->id_karyawan;
				$sess_data['nama_karyawan'] = $sess->nama_karyawan;
				$sess_data['user'] = $sess->user;
				$this->session->set_userdata($sess_data);
			
			}
			
			if ($this->session->userdata('user')=='Pemilik') {
				redirect('pemilik/c_homeP');
			}
			else if ($this->session->userdata('user')=='Kasir') {
				redirect('kasir/c_homeKa');
			}
			else if ($this->session->userdata('user')=='Koki') {
				redirect('koki/c_homeKo');			
			}
			else if($this->session->userdata('user')=='Admin') {
				redirect('admin/c_homeAd');			
			}
			
			}
				else{
					$this->load->view('login');
					echo "<script>alert('GAGAL LOGIN!! Username atau Password Anda tidak benar.')</script>
				<script>window.history.back()</script>";
			}
	
}
function logout() {
		$this->session->unset_userdata('id_karyawan');
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('nama_karyawan');
		session_destroy();
		redirect('login');
	}
	
}

?>



