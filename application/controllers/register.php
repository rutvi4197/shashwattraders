<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_controller


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

		$this->load->view('user/register',$cat);
	}

	public function userregister()
	{

		$user_name=$this->input->post('Username');
		$email_id=$this->input->post('Email');
		$password=$this->input->post('Password');
		$cpassword=$this->input->post('ConfirmPassword');
		$user_add1='null';
		$user_add2='null';
		$user_city='null';
		$user_pincode=0;
		$user_type="user";
		$user_mobile_no=0;


		// echo $email_id.'</br>';
		// echo $password.'</br>';
		// echo $cpassword.'</br>';
		if($password==$cpassword)
		{
			
			$this->load->model('user');
			if($this->user->Register($email_id,$password,$user_name,$user_add1,$user_add2,$user_city,$user_pincode,$user_type,$user_mobile_no))
			{
			
					$this->session->set_userdata('email_id',$email_id);
					echo redirect('home');
			}
			else 
			{
				$this->session->set_flashdata('registererror','error');
				echo redirect('register');
			}
		}
		else
		{
			$this->session->set_flashdata('passworderror','error');
				echo redirect('register');
		}
	}

	public function changepassword()
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

		$this->load->view('user/changepassword');
		
	}
	public function changepass()
	{
		$password=$this->input->post('Password');
		$newpassword=$this->input->post('NewPassword');
		$confirmpassword=$this->input->post('ConfirmPassword');
		$email_id=$this->session->userdata('email_id');
		
		$this->load->model('user');
		if($this->user->checkpassword($email_id,$password))
		{
		if($newpassword==$confirmpassword)
		{
			if($this->user->Changepassword($email_id,$confirmpassword))
			{
				echo 'Password Changed Successfully';
				redirect('home');
			}
			else 
			{
				echo 'Password Invalid';
			}
		}
		else 
		{
			echo 'Password Does not Match';
		}
	}
	else
	{
		echo 'old password is Invalid';
	}
	}

}