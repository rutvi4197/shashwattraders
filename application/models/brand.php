<?php 

class Brand extends CI_Model
{
	public function fetchbrand()
	{

		$q=$this->db->query('select * from brand_tbl');
		return $q->result();
	}
	
	
}
?>


