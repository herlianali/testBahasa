<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HargaPembelajaran_model extends CI_Model
{

	public function getAll($table)
	{
		$query = $this->db->select("*")
						  ->from($table)
						  ->order_by("id_harga","ASCE")
						  ->get();
		return $query->result();
	}

	public function getBy($id)
	{
		$query = $this->db->select("*")
						  ->from("hargaPembelajaran")
						  ->where("id_harga",$id)
						  ->get();
		return $query->result();
	}

	public function getByRow($id)
	{
		$query = $this->db->select("*")
						  ->from("hargaPembelajaran")
						  ->where("id_harga",$id)
						  ->get();
		return $query->row();
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
		$query = $this->db->where('id_harga',$id)
						  ->delete($table);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function edit($table, $id, $data)
	{
		$query = $this->db->where('id_harga',$id)
						  ->update($table,$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}