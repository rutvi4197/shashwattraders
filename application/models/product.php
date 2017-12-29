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
		$q=$this->db->query("select p.*,b.* from product_tbl as p,bathitype_tbl as b where b.pk_bathitype_id=p.fk_bathitype_id and p.pk_product_id='$pro_id'");
		return $q->result();
	}
	public function fetchfragrancebyproid($pro_id)
	{
		$q=$this->db->query("SELECT f.fragrance_name
		FROM `fragrance_product_tbl` AS fp, fragrance_tbl AS f
		WHERE fp.fk_product_id ='$pro_id'AND f.fragrance_id = fp.fk_fragrance_id");
		return $q->result();
	}
}