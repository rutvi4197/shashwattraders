<?php 

class Brand extends CI_Model
{
	public function fetchcat()
	{

		$q=$this->db->query('select * from brand_tbl');
		return $q->result();
	}
}
?>