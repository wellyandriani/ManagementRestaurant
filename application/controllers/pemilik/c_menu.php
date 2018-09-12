<?php
session_start();

class c_menu extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model("m_menu");
if ($this->session->userdata('id_karyawan')=="") {
			echo "<script>alert('Anda harus login');history.go(-1);</script>";
			redirect('index.php/login');
}
$this->load->helper('text');
}


public function index()
{
$data['id_karyawan'] = $this->session->userdata('id_karyawan');
$data['password'] = $this->session->userdata('password');
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
      'kategori' => $this->input->post('kategori'),
      'harga' => $this->input->post('harga'),
      'gambar' => $this->input->post('gambar')
   );
  $this->m_menu->addMenu($data);
  redirect('c_tambahmenu');
}

public function updateMenu($id_menu)
{

$data['menu'] = $this->m_menu->getMenu($id_menu);
$this->load->view('pemilik/editmenu', $data);
}

public function updateMenuDb()
{
$data = array(
'id_menu' => $this->input->post('id_menu'),
'nama_menu' => $this->input->post('nama_menu'),
'kategori' => $this->input->post('kategori'),
'harga' => $this->input->post('harga'),
'gambar' => $this->input->post('gambar')
);
$condition['id_menu'] = $this->input->post('id_menu'); 
$this->m_menu->updateMenu($data, $condition);
redirect('/index.php/pemilik/c_menu');
}

public function detailMenu($id_menu)
{
$data['detailmenu'] = $this->m_menu->getMenu($id_menu);
$this->load->view('pemilik/detailMenu', $data);
}
public function detailMenuDb()
{
$data = array(
'id_menu' => $this->input->post('id_menu'),
'nama_menu' => $this->input->post('nama_menu'),
'kategori' => $this->input->post('kategori'),
'harga' => $this->input->post('harga'),
'gambar' => $this->input->post('gambar')
);
$condition['id_menu'] = $this->input->post('id_menu'); 
$this->m_menu->updateMenu($data, $condition);
redirect('/index.php/pemilik/c_menu');
}

public function deleteMenuDb($id_menu)
{
$this->m_menu->deleteMenu($id_menu); 
redirect('/index.php/pemilik/c_menu');
}


function search_keyword()
    {
        $keyword = $this->input->post('keyword');
        $data['listMenu'] = $this->m_menu->search($keyword);
        $this->load->view('pemilik/menu',$data);
    }

}