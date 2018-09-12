<?php
class m_karyawan extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getAllKaryawan()
	{
		$this->db->select("*");
		$this->db->from("karyawan");
		
		return $this->db->get();
	}
	
	function getKaryawan($id)
	{
		$this->db->where('id_karyawan', $id); 
		$this->db->select("*");
		$this->db->from("karyawan");
		
		return $this->db->get();
	}
	
	function addKaryawan($data)
	{
		$this->db->insert('karyawan', $data);
	}
	
	function updateKaryawan($data, $condition)
	{
		$this->db->where($condition); 
		$this->db->update('karyawan', $data); 
	}

	function deleteKaryawan($id)
	{
		$this->db->where('id_karyawan', $id);
		$this->db->delete('karyawan');
	}
	
	function search($keyword)
    {
        $this->db->like('nama_karyawan',$keyword);
		$this->db->OR_like('id_karyawan',$keyword);
        $this->db->from('karyawan');
        return $this->db->get();
    }
	
}