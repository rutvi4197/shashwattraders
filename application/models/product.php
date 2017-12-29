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
	public function brandsearch($brand_id)
	{
		$q=$this->db->query("select * from product_tbl where fk_brand_id='$brand_id'" );
		return $q->result();
	}
}