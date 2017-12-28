<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Singlepage extends CI_controller
{

	public function productdetail($product_id)
	{
		$this->load->model('brand');
		$cat['brand_name']=$this->brand->fetchbrand();
		

		$this->load->model('product');
		$cat['product_name']=$this->product->fetchproduct();

		$this->load->model('category');
		$cat['category_name']=$this->category->fetchcat();

		$this->load->model('packingtype');
		$cat['packing_name']=$this->packingtype->fetchpack();

		$this->load->view('user/single',$cat);
	}
}