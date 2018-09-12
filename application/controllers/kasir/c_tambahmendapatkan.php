<?php
session_start();
class c_tambahmendapatkan extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model("m_mendapatkan");
if ($this->session->userdata('id_karyawan')=="") {
			redirect('login');
}
$this->load->helper('text');
}

	public function index()
	{
	$data['id_karyawan'] = $this->session->userdata('id_karyawan');
	$data['password'] = $this->session->userdata('password');
		$this->load->view('dokter/tambahmendapatkan');
	}

public function showMendapatkan()
{

$data['listmendapatkan'] = $this->m_mendapatkan->getAllMendapatkan();
$this->load->view('dokter/mendapatkan', $data);
}

public function addMendapatkan($no_medicalrecord)
{
$this->load->view('dokter/tambahmendapatkan');
}
public function addmendapatkanDb()
{
$data = array(
'id_resep' => $this->input->post('id_resep'),
'no_medicalrecord' => $this->input->post('no_medicalrecord'),
'namaobat' => $this->input->post('namaobat'),
'dosis' => $this->input->post('dosis'),
'harga' => $this->input->post('harga')

);
$this->m_mendapatkan->addMendapatkan($data);
redirect('/dokter/c_mendapatkan');

}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */