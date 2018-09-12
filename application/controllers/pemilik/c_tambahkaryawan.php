<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_tambahkaryawan extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model("m_karyawan");
}

	public function index()
	{
		$this->load->view('pemilik/tambahkaryawan');
	}

public function showKaryawan()
{

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
'gaji' => $this->input->post('gaji'),
'status' => $this->input->post('status'),
'user' => $this->input->post('user')
);
$this->m_karyawan->addKaryawan($data);
redirect('pemilik/c_karyawan');
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */