<?php 
class Order extends CI_Model
{
	public function fetchorderbyid($email_id,$product_id,$date)
	{
		$q=$this->db->query("INSERT INTO order_tbl 
			(pk_order_id,fk_user_email_id,order_date,fk_pro_id,type) 
			VALUES (NULL,'$email_id','$date',$product_id,1)");
		return $q->result();

	}
	public function fetchwishlist($email_id)
	{
		$q=$this->db->query("select * from order_tbl where fk_user_email_id='$email_id' and type=2 ");
		return $q->result();
	}
}
