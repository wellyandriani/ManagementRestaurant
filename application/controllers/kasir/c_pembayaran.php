<?php
session_start();
class c_pembayaran extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model("m_pembayaran");
if ($this->session->userdata('id_karyawan')=="") {
			redirect('login');
}
$this->load->helper('text');
}


public function index()
{  
$data['id_karyawan'] = $this->session->userdata('id_karyawan');
$data['password'] = $this->session->userdata('password');
$data['listPembayaran'] = $this->m_pembayaran->getAllPembayaran();
$this->load->view('kasir/pembayaran', $data);
}

public function addPembayaran()
{
$this->load->view('tambahpembayaran');
}
public function addpembayaranDb()
{
$data = array(
'no_struk' => $this->input->post('no_struk'),
'no_meja' => $this->input->post('no_meja' ),
'id_pesanan' => $this->input->post('id_pesanan'),
'tanggal' => $this->input->post('tanggal'),
'tagihan' => $this->input->post('tagihan'),
'total' => $this->input->post('total')

);
$this->m_pembayaran->addPembayaran($data);
redirect('/kasir/c_pembayaran');
}


public function updatePembayaran($no_struk)
{

$data['pembayaran'] = $this->m_pembayaran->getPembayaran($no_struk);
$this->load->view('kasir/editpembayaran', $data);
}

public function updatePembayaranDb()
{
$data = array(
'no_struk' => $this->input->post('no_struk'),
'no_meja' => $this->input->post('no_meja' ),
'id_pesanan' => $this->input->post('id_pesanan'),
'tanggal' => $this->input->post('tanggal'),
'tagihan' => $this->input->post('tagihan'),
'total' => $this->input->post('total')

);
$condition['no_struk'] = $this->input->post('no_struk'); 
$this->m_pembayaran->updatePembayaran($data, $condition);
redirect('/kasir/c_pembayaran');
}


public function detailPembayaran($no_struk)
{

$data['detailpembayaran'] = $this->m_pembayaran->getPembayaran($no_struk);
$this->load->view('kasir/detailPembayaran', $data);
}

public function detailPembayaranDb()
{
$data = array(
'no_struk' => $this->input->post('no_struk'),
'no_meja' => $this->input->post('no_meja' ),
'id_pesanan' => $this->input->post('id_pesanan'),
'tanggal' => $this->input->post('tanggal'),
'tagihan' => $this->input->post('tagihan'),
'total' => $this->input->post('total')

);
$condition['no_struk'] = $this->input->post('no_struk'); 
$this->m_pembayaran->updatePembayaran($data, $condition);
redirect('/kasir/c_pembayaran');
}

public function deletePembayaranDb($no_struk)
{
$this->session->set_flashdata('msg', '<div class="alert alert-info">
Data berhasil dihapus !</div>');
$this->m_pembayaran->deletePembayaran($no_struk); 
redirect('/kasir/c_pembayaran');

}

function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['listPembayaran'] = $this->m_pembayaran->search($keyword);
        $this->load->view('kasir/pembayaran',$data);
    }
	
	function search_penghasilan()
    {
        $keyword = $this->input->post('keyword');
        $data['listPenghasilan'] = $this->m_pembayaran->tampil($keyword);
        $this->load->view('pemilik/penghasilan',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */