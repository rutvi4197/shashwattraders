<?php 
class Order extends CI_Model
{
	public function fetchorderbyid($email_id,$product_id,$date)
	{
		$q=$this->db->query("INSERT INTO order_tbl 
			(pk_order_id,fk_user_email_id,order_date,fk_pro_id,type) 
			VALUES (NULL,'$email_id','$date',$product_id,1)");

		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	public function fetchorderbyemail($email_id,$type)
	{
		$q=$this->db->query("select o.pk_order_id,p.product_name,o.order_date from order_tbl as o, product_tbl as p where p.pk_product_id=o.fk_pro_id and o.fk_user_email_id='$email_id' and type='$type'");
		return $q->result();
	}
}
?>