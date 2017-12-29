<?php 
class Packingtype extends CI_Model
{
	public function fetchpack()
	{
		$q=$this->db->query('select * from packing_type_tbl');
		return $q->result();
	}
}