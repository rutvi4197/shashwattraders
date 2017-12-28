<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_controller
{
	public function index()
	{
		$this->load->model('brand');
		$cat['brand_name']=$this->brand->fetchcat();
		
		$this->load->view('user/main',$cat);
	}
	public function brandsearch($brand_id)
	{
		echo $brand_id;
	}
}