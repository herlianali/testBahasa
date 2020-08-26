<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Raport_model extends CI_Model
{

	public function store($data)
	{
		$query = $this->db->insert("raport", $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function update($data, $id)
	{
		$query = $this->db->where('id', $id)
						  ->update('raport', $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function getBy($id)
	{
		$query = $this->db->select('*')
						  ->from('raport')
						  ->where('id', $id)
						  ->get();
		if ($query) {
			return $query->result();
		}else{
			return false;
		}
	}
}