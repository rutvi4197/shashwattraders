<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orderhistory extends CI_controller
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

		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=0;

		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		$cat['order_history']=$this->order->fetchorderhistorybyemail($email_id,$type);
		
		$this->load->view('user/orderhistory',$cat);
		}
	}
}