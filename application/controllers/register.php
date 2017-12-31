<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_controller
<<<<<<< HEAD
{

	public function index()
	{
		

		$this->load->model('brand');
		$array['brand_name']=$this->brand->fetchbrand();
		

		$this->load->model('product');
		$array['product_name']=$this->product->fetchproduct();

		$this->load->model('category');
		$array['category_name']=$this->category->fetchcat();

		$this->load->model('packingtype');
		$array['packing_name']=$this->packingtype->fetchpack();

		$this->load->model('fragrance');
		$array['fragrance_name']=$this->fragrance->fetchfra();

		$this->load->view('user/register',$array);

		
		
=======

{
	public function index()
	{
		$this->load->model('brand');
		$cat['brand_name']=$this->brand->fetchbrand();
		

		$this->load->model('product');
		$cat['product_name']=$this->product->fetchproduct();

		$this->load->model('category');
		$cat['category_name']=$this->category->fetchcat();

		$this->load->model('packingtype');
		$cat['packing_name']=$this->packingtype->fetchpack();

		$this->load->model('fragrance');
		$cat['fragrance_name']=$this->fragrance->fetchfra();

		$this->load->view('user/register');
	}

	public function userregister()
	{

		$user_name=$this->input->post('Username');
		$email_id=$this->input->post('Email');
		$password=$this->input->post('Password');
		$cpassword=$this->input->post('Confirm Password');
		$user_add1='null';
		$user_add2='null';
		$user_city='null';
		$user_pincode=0;
		$user_type='user';


		echo $email_id;
		echo $password;
		echo $cpassword;
		if($password==$cpassword)
		{
			
			$this->load->model('user');
			if($this->user->Register($email_id,$password,$user_name,$user_add1,$user_add2,$user_city,$user_pincode,$user_type))
			{
			
					$this->session->set_userdata('email_id',$email_id);
					echo 'login sucessfully'; 
			}
			else 
			{
				echo 'Invalid';
			}
		}
		else
		{
			echo 'Password and Confirm Password are not matched.';
		}
>>>>>>> 2164a88f43b2a35b1acf1dddfe69049ca660228b

	}

}