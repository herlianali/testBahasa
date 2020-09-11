<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

	public function cekUser($db, $data)
	{
		$query = $this->db->get_where($db, $data);
		return $query;
	}
}