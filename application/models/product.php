<?php

class Product extends CI_Model
{
	public function productsearchbyname()
	{
		$match = $this->input->post('search');
		$q=$this->db->query("select * from product_tbl where product_name like '%$match%'  ");
		return $q->result();
	}
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
	public function brandsearch($brand_id)
	{
		$q=$this->db->query("select * from product_tbl where fk_brand_id='$brand_id'" );
		return $q->result();
	}
	public function catsearch($cat_id)
	{
		$q=$this->db->query("select * from product_tbl where fk_catgory_id='$cat_id'" );
		return $q->result();
	}
	public function packingsearchbyid($packing_id)
	{
		$q=$this->db->query("select * from product_tbl where fk_ptid='$packing_id'" );
		return $q->result();
	}
	public function productsearchbybrand($pro_id)
	{
		$q=$this->db->query("select * from product_tbl where fk_brand_id =(select fk_brand_id from product_tbl where pk_product_id='$pro_id') and pk_product_id!='$pro_id'" );
		
		return $q->result();
	}


	public function fragrancesearchbyid($pro_id)
	{
		$q=$this->db->query("select * from product_tbl where pk_product_id In (select fk_product_id from fragrance_product_tbl where fk_fragrance_id='$pro_id')" );
		
		return $q->result();
	}
}
?>