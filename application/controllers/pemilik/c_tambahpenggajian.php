<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_tambahpenggajian extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model("m_penggajian");
}

	public function index()
	{
		$this->load->view('pemilik/tambahpenggajian');
	}

public function showPenggajian()
{

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
'nama_karyawan' => $this->input->post('nama_karyawan'),
'id_karyawan' => $this->input->post('id_karyawan'),
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */