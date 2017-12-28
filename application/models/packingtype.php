<?php 
class Packingtype extends CI_Model
{
	public function fetchpack()
	{
		$q=$this->db->query('select * from paking_type_tbl');
		return $q->result();
	}
}