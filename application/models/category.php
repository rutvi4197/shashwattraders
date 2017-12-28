<?php 
class Category extends CI_Model
{
	public function fetchcat()
	{
		$q=$this->db->query('select * from category_tbl');
		return $q->result();
	}
}