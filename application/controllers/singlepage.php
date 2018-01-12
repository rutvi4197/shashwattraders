<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Singlepage extends CI_controller
{

	public function productdetail($product_id)
	{
		$this->load->model('brand');
		$cat['brand_name']=$this->brand->fetchbrand();
		
		$this->load->model('product');
		$cat['product_name']=$this->product->fetchproduct();

		$cat['product_detail']=$this->product->fetchproductbyid($product_id);
		$cat['fragrance_detail']=$this->product->fetchfragrancebyproid($product_id);
		$cat['brand_product_name']=$this->product->productsearchbybrand($product_id);
		

		$this->load->model('category');
		$cat['category_name']=$this->category->fetchcat();

		$this->load->model('packingtype');
		$cat['packing_name']=$this->packingtype->fetchpack();

		$this->load->model('fragrance');
		$cat['fragrance_name']=$this->fragrance->fetchfra();


		$this->load->view('user/single',$cat);
	}
	public function addtocart($product_id)
	{
		//echo $product_id;
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$d1=date('d-m-Y');
		
		if($this->order->insertorderincart($email_id,$product_id,$d1))
		{
			echo redirect('cartview');		
		}
		else
		{
			echo redirect('home');
		}
	}
	public function addtowish($product_id)
	{
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		//$type=2;
		$d2=date('d-m-Y');

		if($this->order->insertorderinwish($email_id,$product_id,$d2))
		{

			echo redirect('wishlist');
		}
		
		else
		{
			 echo redirect('home');  
		}
	}
}