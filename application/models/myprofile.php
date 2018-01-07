<?php 
class Myprofile extends CI_Model
{
	public function fetchdata($email_id)
	{
		$q=$this->db->query("select * from user_tbl where pk_user_email_id='$email_id'");
		return $q->result();
	}
}