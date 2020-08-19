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
		$query = $this->db->update("raport", $data, $id);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}