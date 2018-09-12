<?php
class m_penggajian extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getAllPenggajian()
	{
		$this->db->select("*");
		$this->db->from("penggajian");
		
		return $this->db->get();
	}
	
	function getPenggajian($id)
	{
		$this->db->where('id_karyawan', $id); 
		$this->db->select("*");
		$this->db->from("penggajian");
		return $this->db->get();
	}
	
	function addPenggajian($data)
	{
		$this->db->insert('penggajian', $data);
	}
	
	function updatePenggajian($data, $condition)
	{
		$this->db->where($condition); 
		$this->db->update('penggajian', $data); 
	}

	function deletePenggajian($id)
	{
		$this->db->where('id_karyawan', $id);
		$this->db->delete('penggajian');
	}
	
	function search($keyword)
    {
        $this->db->like('id_karyawan',$keyword);
		$this->db->OR_like('nama_karyawan',$keyword);
        $this->db->from('penggajian');
        return $this->db->get();
    }
	
}