<?php

class Product extends CI_Model
{
	public function fetchproduct()
	{
		$q=$this->db->query('select * from product_tbl');
		return $q->result();
	}
	public function fetchproductbyid($pro_id)
	{
		$q=$this->db->where('pk_product_id',$pro_id)
					->get('product_tbl');
		return $q->result();
	}
}