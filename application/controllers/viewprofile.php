<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viewprofile extends CI_controller

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

		$this->load->view('user/viewprofile',$cat);
	}

		
	
	

	public function logout()
	{
		$this->session->unset_userdata('email_id');
		redirect('home');
	}

}