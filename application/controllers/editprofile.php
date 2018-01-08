<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editprofile extends CI_controller

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

		$email_id=$this->session->userdata('email_id');

		$this->load->model('myprofile');
		$cat['user_data']=$this->myprofile->fetchdata($email_id);

		$this->load->view('user/editprofile',$cat);
	}
	public function edit()
	{

		$email_id=$this->input->post('Email');
		$name=$this->input->post('Name');
		$mobile=$this->input->post('Mobileno');
		$add1=$this->input->post('Address1');
		$add2=$this->input->post('Address2');
		$city=$this->input->post('City');
		//echo $email_id.$password;
		$this->load->model('myprofile');
		if($this->myprofile->editprofile($email_id,$name,$add1,$add2,$city,$mobile))
		{
				echo redirect('viewprofile');
		}
		else {
			echo 'Invalid';
		}
	}


}