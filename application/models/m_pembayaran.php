<?php
class m_pembayaran extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getAllPembayaran()
	{
		$this->db->select("*");
		$this->db->from("pembayaran");
		
		return $this->db->get();
	}
	
	function getPenghasilan()
	{
		$this->db->select("total");
		$this->db->from("pembayaran");
		
		return $this->db->get();
	}
	
	function getPembayaran($id)
	{
		$this->db->where('no_struk', $id); 
		$this->db->select("*");
		$this->db->from("pembayaran");
		return $this->db->get();
	}
	
	
	function addPembayaran($data)
	{
		$this->db->insert('pembayaran', $data);
	}
	
	function updatePembayaran($data, $condition)
	{
		$this->db->where($condition); 
		$this->db->update('pembayaran', $data); 
	}

	function deletePembayaran($id)
	{
		$this->db->where('no_struk', $id);
		$this->db->delete('pembayaran');
	}
	function search($keyword)
    {
        $this->db->like('nama_pasien',$keyword);
		$this->db->OR_like('no_medicalrecord',$keyword);
        $this->db->from('pembayaran');
        return $this->db->get();
    }
	function tampil($keyword)
    {
        $this->db->like('tanggal_out',$keyword);
		$this->db->OR_like('tanggal_in',$keyword);
        $this->db->from('pembayaran');
        return $this->db->get();
		

    }
}