<?php 
class Fragrance extends CI_Model
{
	public function fetchfra()
	{
		$q=$this->db->query('select * from fragrance_tbl');
		return $q->result();
	}

	
}
