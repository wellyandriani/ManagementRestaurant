<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class c_karyawan extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model("m_karyawan");
if ($this->session->userdata('id_karyawan')=="") {
			redirect('login');
}
$this->load->helper('text');
}


public function index()
{
$data['id_karyawan'] = $this->session->userdata('id_karyawan');
$data['password'] = $this->session->userdata('password');
$data['listKaryawan'] = $this->m_karyawan->getAllKaryawan();
$this->load->view('pemilik/karyawan', $data);
}

public function addKaryawan()
{
$this->load->view('tambahkaryawan');
}
public function addkaryawanDb()
{
$data = array(
'nama_karyawan' => $this->input->post('nama_karyawan'),
'id_karyawan' => $this->input->post('id_karyawan'),
'password' => $this->input->post('password'),
'jenis_kelamin' => $this->input->post('jenis_kelamin'),
'ttl' => $this->input->post('ttl'),
'alamat' => $this->input->post('alamat'),
'agama' => $this->input->post('agama'),
'no_telp' => $this->input->post('no_telp'),
'status' => $this->input->post('status'),
'user' => $this->input->post('user')
);
$this->m_karyawan->addKaryawan($data);
redirect('c_tambahkaryawan');
}
public function updateKaryawan($id_karyawan)
{

$data['karyawan'] = $this->m_karyawan->getKaryawan($id_karyawan);
$this->load->view('pemilik/editkaryawan', $data);
}
public function updateKaryawanDb()
{
$data = array(
'nama_karyawan' => $this->input->post('nama_karyawan'),
'id_karyawan' => $this->input->post('id_karyawan'),
'password' => $this->input->post('password'),
'jenis_kelamin' => $this->input->post('jenis_kelamin'),
'ttl' => $this->input->post('ttl'),
'alamat' => $this->input->post('alamat'),
'agama' => $this->input->post('agama'),
'no_telp' => $this->input->post('no_telp'),
'status' => $this->input->post('status'),
'user' => $this->input->post('user')
);
$condition['id_karyawan'] = $this->input->post('id_karyawan'); 
$this->m_karyawan->updateKaryawan($data, $condition);
redirect('/pemilik/c_karyawan');
}

public function detailKaryawan($id_karyawan)
{

$data['detailkaryawan'] = $this->m_karyawan->getKaryawan($id_karyawan);
$this->load->view('pemilik/detailKaryawan', $data);
}
public function detailKaryawanDb()
{
$data = array(
'nama_karyawan' => $this->input->post('nama_karyawan'),
'id_karyawan' => $this->input->post('id_karyawan'),
'password' => $this->input->post('password'),
'jenis_kelamin' => $this->input->post('jenis_kelamin'),
'ttl' => $this->input->post('ttl'),
'alamat' => $this->input->post('alamat'),
'agama' => $this->input->post('agama'),
'no_telp' => $this->input->post('no_telp'),
'status' => $this->input->post('status'),
'user' => $this->input->post('user')
);
$condition['id_karyawan'] = $this->input->post('id_karyawan'); 
$this->m_karyawan->updateKaryawan($data, $condition);
redirect('/pemilik/c_karyawan');
}

public function deleteKaryawanDb($id_karyawan)
{

$this->m_karyawan->deleteKaryawan($id_karyawan); 
redirect('/pemilik/c_karyawan');
}

function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['listKaryawan'] = $this->m_karyawan->search($keyword);
        $this->load->view('pemilik/karyawan',$data);
    }

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */