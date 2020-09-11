<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model
{

	public function getAll($table)
	{
		$query = $this->db->select("*")
					  	  ->from($table)
						  ->order_by("id","ASCE")
						  ->get();
		return $query->result();
	}

	public function getWhere($table, $where)
	{
		$query = $this->db->select("*")
						  ->from($table)
						  ->where("jenis_test",$where)
						  ->order_by("id","ASCE")
						  ->get();
		return $query->result();
	}

	public function store($table, $data)
	{
		$query = $this->db->insert($table, $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}


	public function edit($id, $table)
	{
		$query = $this->db->where("id_user", $id)
						  ->get($table);
		if ($query) {
			return $query->row();
		}else{
			return false;
		}
	}


	public function update($table, $data, $id)
	{
		$query = $this->db->where('id',$id)
						  ->update($table, $data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}

	public function delete($table, $id)
	{
		$query = $this->db->where('$id',$id)
						  ->delete($table);
	}

	public function voice($table, $data, $id)
	{
		$query = $this->db->where('id',$id)
						  ->update($table, $data);
	}

	public function voiceGet($jenis)
	{
		$where = array(
			'status' 	=> "aktif",
			'jenis_test' => $jenis,
			);
		$query = $this->db->get_where('listening', $where);
		return $query->result();
	}
}