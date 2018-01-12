<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class wishlist extends CI_controller
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
		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		$this->load->model('order');
		$cat['wish_detail']=$this->order->fetchwishlist($this->session->userdata('email_id'));
		$this->load->view('user/wishlist',$cat);
		}
	} 
	public function updatecart($product_id)
	{
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=1;
		if($this->order->editbuy($email_id,$product_id,$type))
		{

			echo redirect('cartview');
		}
		
		else
		{
			 $this->session->set_flashdata('success','Something went Wrong');
			 //echo redirect('wishlist');
               
		}
	}
	
}