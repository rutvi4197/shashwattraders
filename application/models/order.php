<?php 
class Order extends CI_Model
{
	public function insertorderincart($email_id,$product_id,$date)
	{
		$q=$this->db->query("select * from order_tbl where fk_product_id='$product_id' and fk_user_email_id='$email_id' and type=1");
		if($q->num_rows==0)
		{
					$q=$this->db->query("INSERT INTO order_tbl 
			(pk_order_id,fk_user_email_id,order_date,fk_product_id,type,qty) 
			VALUES (NULL,'$email_id','$date',$product_id,1,1)");

			if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;
		}
		else
		{
			echo redirect('cartview');
		}
	}
	
	public function editbuy($email_id,$product_id,$type)
	{
		$q=$this->db->query("select * from order_tbl where fk_user_email_id='$email_id' and fk_product_id='$product_id' and type=2");
		if($q->num_rows!=0)
		{
			$q=$this->db->query("update order_tbl set type='$type' 
				where fk_user_email_id='$email_id' and fk_product_id='$product_id' and type!=0");

			if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;
		}
		else
		{
			echo redirect('wishlist');
		}
	}
	public function place($email_id,$type)
	{
		$q=$this->db->query("select * from order_tbl where fk_user_email_id='$email_id' and type =1");
		if($q->num_rows!=0)
		{
			$q=$this->db->query("update order_tbl set type='$type' 
				where fk_user_email_id='$email_id'");

			if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;
		}
		else
		{
			echo redirect('cartview');
		}
	}
	public function insertorderinwish($email_id,$product_id,$date)
	{
		$q=$this->db->query("select * from order_tbl where fk_product_id='$product_id' and fk_user_email_id='$email_id' and type=2");
		if($q->num_rows==0)
		{
					$q=$this->db->query("INSERT INTO order_tbl 
			(pk_order_id,fk_user_email_id,order_date,fk_product_id,type,qty) 
			VALUES (NULL,'$email_id','$date',$product_id,2,1)");

			if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;
		}
		else
		{
			echo redirect('wishlist');
		}
	}
	public function fetchorderbyemail($email_id,$type)
	{
		$q=$this->db->query("select p.*,o.* from order_tbl as o, product_tbl as p where p.pk_product_id=o.fk_product_id and o.fk_user_email_id='$email_id' and type='$type'");
		return $q->result();
	}

	public function fetchorderhistorybyemail($email_id,$type)
	{
		$q=$this->db->query("select p.*,o.* from order_tbl as o, product_tbl as p where p.pk_product_id=o.fk_product_id and o.fk_user_email_id='$email_id' and type='$type'");
		return $q->result();
	}
	public function fetchwishlist($email_id)
	{
		$q=$this->db->query("select p.*,o.* from order_tbl as o, product_tbl as p where p.pk_product_id=o.fk_product_id and o.fk_user_email_id='$email_id' and type=2");
		return $q->result();
	}
	public function deletecart($email_id,$product_id,$type)
	{
		$q=$this->db->query("delete from order_tbl where fk_user_email_id='$email_id' and fk_product_id='$product_id' and type='$type'");

		if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;
	}
	public function deletewishcart($email_id,$product_id,$type)
	{
		$q=$this->db->query("delete from order_tbl where fk_user_email_id='$email_id' and fk_product_id='$product_id' and type='$type'");

		if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;

		return $q->result();
	}

	public function updatecart($product_id,$email_id)
	{
		$q=$this->db->query("update order_tbl set type=1 where fk_user_email_id='$email_id' and fk_product_id='$product_id'");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	public function checkout($email_id)
	{
		$q=$this->db->query("select p.*,o.* from order_tbl as o, product_tbl as p where p.pk_product_id=o.fk_product_id and o.fk_user_email_id='$email_id' and type=2");
		return $q->result();
	}
}
