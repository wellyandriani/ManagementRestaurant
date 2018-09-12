<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class m_login extends CI_Model {

		function cek_user($data) {
			$query = $this->db->get_where('karyawan', $data);
			return $query;
		}

	}

?>