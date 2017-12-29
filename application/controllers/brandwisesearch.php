<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brandwisesearch extends CI_controller
{

	public function brandsearch($brand_id)
	{
		$this->load->model('brand');
		$arr['brand_name']=$this->brand->fetchbrand();
		

		$this->load->model('product');
		$arr['product_name']=$this->product->fetchproduct();

		$this->load->model('category');
		$arr['category_name']=$this->category->fetchcat();

		$this->load->model('packingtype');
		$arr['packing_name']=$this->packingtype->fetchpack();

		$this->load->model('fragrance');
		$arr['fragrance_name']=$this->fragrance->fetchfra();

		$arr['brand_product_name']=$this->product->brandsearch($brand_id);

		$this->load->view('user/branddisplay',$arr);
	}
	public function categorysearch($category_id)
	{
		$this->load->model('brand');
		$arr['brand_name']=$this->brand->fetchbrand();
		
		$this->load->model('product');
		$arr['product_name']=$this->product->fetchproduct();

		$this->load->model('category');
		$arr['category_name']=$this->category->fetchcat();

		$this->load->model('packingtype');
		$arr['packing_name']=$this->packingtype->fetchpack();

		$this->load->model('fragrance');
		$arr['fragrance_name']=$this->fragrance->fetchfra();

		$arr['cat_name']=$this->product->catsearch($category_id);

		$this->load->view('user/catdisplay',$arr);
	}
	public function packingsearch($packing_id)
	{
		$this->load->model('brand');
		$arr['brand_name']=$this->brand->fetchbrand();
		
		$this->load->model('product');
		$arr['product_name']=$this->product->fetchproduct();

		$this->load->model('category');
		$arr['category_name']=$this->category->fetchcat();

		$this->load->model('packingtype');
		$arr['packing_name']=$this->packingtype->fetchpack();

		$this->load->model('fragrance');
		$arr['fragrance_name']=$this->fragrance->fetchfra();

		$arr['pack_name']=$this->product->packingsearchbyid($packing_id);

		$this->load->view('user/packingdisplay',$arr);
	}
}