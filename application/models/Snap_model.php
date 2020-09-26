<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Snap_model extends CI_Model
{

	public function getBy($order_id)
	{
		$query = $this->db->select("*")
						  ->from("pembayaran")
						  ->where("order_id",$order_id)
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

	public function edit($order_id, $data)
	{
		$query = $this->db->where('order_id',$order_id)
						  ->update("pembayaran",$data);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}