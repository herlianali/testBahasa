<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function store($data)
	{
		$query = $this->db->insert("users", $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

}