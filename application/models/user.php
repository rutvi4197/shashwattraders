<?php 

class User extends CI_Model
{
	public function Authentication($email_id,$password)
	{

		$q=$this->db->query("select * from user_tbl where pk_user_email_id='$email_id' and user_password='$password'");
		/*$q=$this->db->where('pk_user_email_id'=$email and 'user_password'=$password)
					->get('user_tbl');*/
		if($q->num_rows())
			return true;
		else
			return false;
	}
	public function checkpassword($email,$pass)
	{
		$q=$this->db->query("select * from user_tbl where pk_user_email_id='$email' and user_password='$pass'");
		if($q->num_rows())
		{
			return true;
		}
		else
			return false;
	}
	public function Changepassword($email_id,$changepassword)
	{

		$q=$this->db->query("update user_tbl set user_password='$changepassword' 
			where pk_user_email_id='$email_id'");

		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	public function Register($email_id,$password,$user_name,$user_add1,$user_add2,$user_city,$user_pincode,$user_type,$user_mobile_no)
	{
		$q=$this->db->query("select * from user_tbl where pk_user_email_id='$email_id'");
		if($q->num_rows==0)
		{
		$p=$this->db->query("insert into user_tbl values('$email_id','$password','$user_name','$user_add1'
			,'$user_add2','$user_city','$user_pincode','$user_type','$user_mobile_no')");

		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;

		}
	}
	
}
?>


