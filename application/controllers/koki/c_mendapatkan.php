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
$this->load->view('koki/mendapatkan', $data);
}

public function detailMendapatkan($id_resep)
{
$data['detailmendapatkan'] = $this->m_mendapatkan->getMendapatkan($id_resep);
$this->load->view('koki/detailMendapatkan', $data);
}
public function detailMendapatkanDb()
{
$data = array(
'id_pesanan' => $this->input->post('id_pesanan'),
'id_karyawan' => $this->input->post('id_karyawan'),
'no_meja' => $this->input->post('no_meja'),
'keterangan' => $this->input->post('keterangan'),
'tanggal' => $this->input->post('tanggal'),
'total_bayar' => $this->input->post('total_bayar'),
);
$condition['id_pesanan'] = $this->input->post('id_resep'); 
$this->m_mendapatkan->updateMendapatkan($data, $condition);
redirect('/koki/c_mendapatkan');
}

function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['listMendapatkan'] = $this->m_mendapatkan->search($keyword);
        $this->load->view('apoteker/mendapatkan',$data);
    }

}