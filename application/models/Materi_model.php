<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_model extends CI_Model
{

	public function getAll($table)
	{
		$query = $this->db->select("*")
			->from($table)
			->order_by("id","ASCE")
			->get();
		return $query->result();
	}

	public function input($table, $data)
	{
		$query = $this->db->insert($table, $data);
		if ($query) {
			return true;
		}else{
			return false;
		}

	}

	public function delete($table, $id)
	{
		$query = $this->db->where('id',$id)
						  ->delete($table);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function edit($table, $id, $data)
	{
		$query = $this->db->where('id',$id)
						  ->update($table,$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}