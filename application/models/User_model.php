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

	public function getBy($id)
	{
		$query = $this->db->select("*")
						  ->from("users")
						  ->where("id",$id)
						  ->get();
		return $query->result();
	}

	public function getByRow($id)
	{
		$query = $this->db->select("*")
						  ->from("users")
						  ->where("id",$id)
						  ->get();
		return $query->row();
	}

}