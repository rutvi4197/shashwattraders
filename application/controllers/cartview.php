<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cartview extends CI_controller
{

	public function index()
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

		
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=1;

		$cat['cart_view']=$this->order->fetchorderbyemail($email_id,$type);
		
		$this->load->view('user/cart',$cat);
	}
}