<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_controller

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

		$this->load->view('user/login',$cat);
	}

	public function userlogin()
	{

		$email_id=$this->input->post('Email');
		$password=$this->input->post('Password');
		//echo $email_id.$password;
		$this->load->model('user');
		if($this->user->Authentication($email_id,$password))
		{
				$this->session->set_userdata('email_id',$email_id);
				redirect('home');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('login');
		}
	}
	

	public function logout()
	{
		$this->session->unset_userdata('email_id');
		redirect('home');
	}

}