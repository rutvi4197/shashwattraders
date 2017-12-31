<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_controller
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

		
		

	}

}