<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_controller
{
	public function index()
	{
		$this->load->model('category');
		$cat['brand_name']=$this->category->fetchcat();
		
		$this->load->view('user/main',$cat);

		$this->load->model('product');
		$pro['product_name']=$this->product->fetchproduct();
		$this->load->view('user/main',$pro);

	}
}