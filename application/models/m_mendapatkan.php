<?php
class m_mendapatkan extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
		function getResep($id)
	{
		$this->db->where('id_menu', $id); 
		$this->db->select("*");
		$this->db->from("menu");
		return $this->db->get();
	}
	
	function getAllMendapatkan()
	{
		$this->db->select("*");
		$this->db->from("mendapatkan");
		
		return $this->db->get();
		}

	function getMendapatkan($id)
	{
		$this->db->where('id_pesanan', $id); 
		$this->db->select("*");
		$this->db->from("mendapatkan");
		return $this->db->get();
	}
	
	function addMendapatkan($data)
	{
		$this->db->insert('mendapatkan', $data);
	}
	
	function updateMendapatkan($data, $condition)
	{
		$this->db->where($condition); 
		$this->db->update('mendapatkan', $data); 
	}

	function deleteMendapatkan($id)
	{
		$this->db->where('id_resep', $id);
		$this->db->delete('mendapatkan');
	}
	
	function search($keyword)
    {
        $this->db->like('namaobat',$keyword);
		$this->db->OR_like('id_resep',$keyword);
        $this->db->from('mendapatkan');
        return $this->db->get();
    }
} 