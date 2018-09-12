<?php
class m_pesanan extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getAllPesanan()
	{
		$this->db->select("*");
		$this->db->from("pesanan");
		
		return $this->db->get();
	}
	
	function getPesanan($id)
	{
		$this->db->where('id_pesanan', $id); 
		$this->db->select("*");
		$this->db->from("menu");
		return $this->db->get();
	}
	
	function getdetailPesanan($id)
	{
		$this->db->where('id_pesanan', $id); 
		$this->db->select("*");
		$this->db->from("pesanan");
		return $this->db->get();
	}
	
	function addPesanan($data)
	{
		$this->db->insert('pesanan', $data);
	}
	
	function updatePesanan($data, $condition)
	{
		$this->db->where($condition); 
		$this->db->update('pesanan', $data); 
	}

	function deletePesanan($id)
	{
		$this->db->where('id_pesanan', $id);
		$this->db->delete('pesanan');
	}
	
	function search($keyword)
    {
        $this->db->like('id_pesanan',$keyword);
        $this->db->from('pesanan');
        return $this->db->get();
    }
	
}