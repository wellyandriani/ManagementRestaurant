<?php

class c_tambahmenu extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->helper(array('form', 'url'));
$this->load->model("m_menu");

if ($this->session->userdata('id_karyawan')=="") {
			redirect('index.php/login');
}
$this->load->helper('text');
}

	public function index()
	{
	$data['id_karyawan'] = $this->session->userdata('id_karyawan');
$data['password'] = $this->session->userdata('password');
		$this->load->view('pemilik/tambahmenu');
	}
	

public function showMenu()
{

$data['listMenu'] = $this->m_menu->getAllMenu();
$this->load->view('pemilik/menu', $data);
}

public function addMenu()
{
$this->load->view('tambahmenu');
}

public function addmenuDb()
{
 $data = array(
  'id_menu' => $this->input->post('id_menu'),
	'nama_menu' => $this->input->post('nama_menu'),
	'kategori' =>$this->input->post('kategori'),
		'harga' => $this->input->post('harga'),
    'gambar' => $this->input->post('gambar')
);

$this->m_menu->addMenu($data);
redirect('pemilik/c_tmbahmenu');
}
}