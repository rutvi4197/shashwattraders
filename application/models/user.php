<?php 

class User extends CI_Model
{
	public function Authentication($email_id,$password)
	{

		$q=$this->db->query('select * from user_tbl where pk_user_email_id=$email and user_password=$password');
		/*$q=$this->db->where('pk_user_email_id'=$email and 'user_password'=$password)
					->get('user_tbl');*/
		return $q->result();
	}
	
}
?>


