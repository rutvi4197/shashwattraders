<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cartview extends CI_controller
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
		$type=1;

		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		$cat['cart_view']=$this->order->fetchorderbyemail($email_id,$type);
		
		$this->load->view('user/cart',$cat);
		}
	}
	public function deleteorder($product_id)
	{
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=1;

		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		$this->order->deletecart($email_id,$product_id,$type);
		echo redirect('cartview');
		}
	}
	public function placeorder()
	{
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=0;

		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		if($this->order->place($email_id,$type))
			echo redirect('cartview');
		else
			echo "Order Not Placed";
		}
	}
	public function deletewishorder($product_id)
	{
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=2;

		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		$this->order->deletewishcart($email_id,$product_id,$type);
		echo redirect('wishlist');
		}
	}
	public function buynow()
	{
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=1;

		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		$this->order->checkout($email_id);
		echo redirect('buynow');
		}
	}
}