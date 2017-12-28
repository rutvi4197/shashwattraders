<?php

class Product extends CI_Model
{
	public function fetchproduct()
	{
		$q=$this->db->query('select * from product_tbl');
		return $q->result();
	}
}