<?php
session_start();
class c_mendapatkan extends CI_Controller {
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
$data['listMendapatkan'] = $this->m_mendapatkan->getAllMendapatkan();
$this->load->view('dokter/mendapatkan', $data);
}

public function addMendapatkan()
{
$data['pasien'] = $this->m_pasien->getPasien($no_medicalrecord);
$this->load->view('dokter/tambahmendapatkan');
}
public function addmendapatkanDb()
{
$data = array(
'id_resep' => $this->input->post('id_resep'),
'no_medicalrecord' => $this->input->post('no_medicalrecord'),
'id_obat' => $this->input->post('id_obat'),
'namaobat' => $this->input->post('namaobat'),
'dosis' => $this->input->post('dosis'),
'harga' => $this->input->post('harga')
);
$this->m_mendapatkan->addmendapatkan($data);
redirect('c_tambahmendapatkan');
}

public function updateMendapatkan($id_resep)
{
$data['mendapatkan'] = $this->m_mendapatkan->getMendapatkan($id_resep);
$this->load->view('dokter/editmendapatkan', $data);
}

public function updateMendapatkanDb()
{
$data = array(
'id_resep' => $this->input->post('id_resep'),
'no_medicalrecord' => $this->input->post('no_medicalrecord'),
'namaobat' => $this->input->post('namaobat'),
'dosis' => $this->input->post('dosis'),
'harga' => $this->input->post('harga')
);
$condition['id_resep'] = $this->input->post('id_resep'); 
$this->m_mendapatkan->updateMendapatkan($data, $condition);
redirect('/dokter/c_mendapatkan');
}

public function detailMendapatkan($id_resep)
{
$data['detailmendapatkan'] = $this->m_mendapatkan->getMendapatkan($id_resep);
$this->load->view('dokter/detailMendapatkan', $data);
}
public function detailMendapatkanDb()
{
$data = array(
'id_resep' => $this->input->post('id_resep'),
'no_medicalrecord' => $this->input->post('no_medicalrecord'),
'id_obat' => $this->input->post('id_obat'),
'namaobat' => $this->input->post('namaobat'),
'dosis' => $this->input->post('dosis'),
'harga' => $this->input->post('harga')
);
$condition['id_resep'] = $this->input->post('id_resep'); 
$this->m_mendapatkan->updateMendapatkan($data, $condition);
redirect('/dokter/c_mendapatkan');
}
public function deleteMendapatkanDb($id_resep)
{
$this->session->set_flashdata('msg', '<div class="alert alert-info">
Data berhasil dihapus !</div>');
$this->m_mendapatkan->deleteMendapatkan($id_resep); 
redirect('/dokter/c_mendapatkan');
}

function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['listMendapatkan'] = $this->m_mendapatkan->search($keyword);
        $this->load->view('dokter/mendapatkan',$data);
    }

}