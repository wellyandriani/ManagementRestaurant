<?php
class m_menu extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function getAllMenu()
	{
		$this->db->select("*");
		$this->db->from("menu");
		
		return $this->db->get();
	}
	
	function getMenu($id)
	{
		$this->db->where('id_menu', $id); 
		$this->db->select("*");
		$this->db->from("menu");
		return $this->db->get();
	}
	
	function addMenu($data)
	{
		$this->db->insert('menu', $data); 
	}

	

	function updateMenu($data, $condition)
	{
		$this->db->where($condition); 
		$this->db->update('menu', $data); 
	}

	function deleteMenu($id)
	{
		$this->db->where('id_menu', $id);
		$this->db->delete('menu');
	}
	
	function search($keyword)
    {
        $this->db->like('nama_menu',$keyword);
		$this->db->OR_like('id_menu',$keyword);
        $this->db->from('menu');
        return $this->db->get();
    }
	
	
	
}
