<?php
session_start();
class c_Penggajian extends CI_Controller {

function __construct(){
parent::__construct();
$this->load->model("m_penggajian");
if ($this->session->userdata('id_karyawan')=="") {
			redirect('login');
}
$this->load->helper('text');
}
public function index()
{
$data['id_karyawan'] = $this->session->userdata('id_karyawan');
$data['password'] = $this->session->userdata('password');
$data['listPenggajian'] = $this->m_penggajian->getAllPenggajian();
$this->load->view('pemilik/penggajian', $data);
}

public function addPenggajian()
{
$this->load->view('tambahpenggajian');
}
public function addpenggajianDb()
{
$data = array(
'id_karyawan' => $this->input->post('id_karyawan'),
'nama_karyawan' => $this->input->post('nama_karyawan'),
'jabatan' => $this->input->post('jabatan'),
'jumlah_jam' => $this->input->post('jumlah_jam'),
'upah' => $this->input->post('upah'),
'overtime' => $this->input->post('overtime'),
'upah_overtime' => $this->input->post('upah_overtime'),
'potongan' => $this->input->post('potongan'),
'total_gaji' => $this->input->post('total_gaji')

);
$this->m_penggajian->addPenggajian($data);
redirect('/pemilik/c_penggajian');
}

public function updatePenggajian($id_karyawan)
{

$data['penggajian'] = $this->m_penggajian->getPenggajian($id_karyawan);
$this->load->view('pemilik/editpenggajian', $data);
}
public function updatePenggajianDb()
{
$data = array(
'id_karyawan' => $this->input->post('id_karyawan'),
'nama_karyawan' => $this->input->post('nama_karyawan'),
'jabatan' => $this->input->post('jabatan'),
'jumlah_jam' => $this->input->post('jumlah_jam'),
'upah' => $this->input->post('upah'),
'overtime' => $this->input->post('overtime'),
'upah_overtime' => $this->input->post('upah_overtime'),
'potongan' => $this->input->post('potongan'),
'total_gaji' => $this->input->post('total_gaji')

);
$condition['id_karyawan'] = $this->input->post('id_karyawan'); 
$this->m_penggajian->updatePenggajian($data, $condition);
redirect('/pemilik/c_penggajian');
}

public function detailPenggajian($id_karyawan)
{

$data['detailpenggajian'] = $this->m_penggajian->getPenggajian($id_karyawan);
$this->load->view('pemilik/detailPenggajian', $data);
}
public function detailPenggajianDb()
{
$data = array(
'id_karyawan' => $this->input->post('id_karyawan'),
'nama_karyawan' => $this->input->post('nama_karyawan'),
'jabatan' => $this->input->post('jabatan'),
'jumlah_jam' => $this->input->post('jumlah_jam'),
'upah' => $this->input->post('upah'),
'overtime' => $this->input->post('overtime'),
'upah_overtime' => $this->input->post('upah_overtime'),
'potongan' => $this->input->post('potongan'),
'total_gaji' => $this->input->post('total_gaji')

);
$condition['id_karyawan'] = $this->input->post('id_karyawan'); 
$this->m_penggajian->updatePenggajian($data, $condition);
redirect('/pemilik/c_penggajian');
}

public function deletePenggajianDb($id_karyawan)
{

$this->m_penggajian->deletePenggajian($id_karyawan); 
$this->session->set_flashdata('msg', '<div class="alert alert-info">
Data berhasil dihapus !</div>');
redirect('/pemilik/c_penggajian');

}

function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['listPenggajian'] = $this->m_penggajian->search($keyword);
        $this->load->view('pemilik/penggajian',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */