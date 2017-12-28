<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_controller
{
	public function index()
	{
		$this->load->model('brand');
		$cat['brand_name']=$this->brand->fetchcat();
		
		$this->load->view('user/main',$cat);

		$this->load->model('product');
		$pro['product_name']=$this->product->fetchproduct();
		$this->load->view('user/main',$pro);

	}
	public function brandsearch($brand_id)
	{
		echo $brand_id;
		
	}
}