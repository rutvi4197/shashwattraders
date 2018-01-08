<?php 
class Myprofile extends CI_Model
{
	public function fetchdata($email_id)
	{
		$q=$this->db->query("select * from user_tbl where pk_user_email_id='$email_id'");
		return $q->result();
	}

	public function editprofile($email_id,$name,$add1,$add2,$city,$mobile)
	{
		$q=$this->db->query("update user_tbl set user_name='$name',user_add1='$add1',user_add2='$add2',
							 user_city='$city',user_mobile_no='$mobile' 
							 where pk_user_email_id='$email_id'");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
}