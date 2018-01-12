<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buynow extends CI_controller
{

	public function index()
	{
		$this->load->model('order');
		$email_id=$this->session->userdata('email_id');
		$type=1;

		if(!$this->session->userdata('email_id'))
		{
			echo redirect('login');
		}
		else{
		$cat['buy_now']=$this->order->fetchorderbyemail($email_id,$type);
		$this->load->view('user/buynow',$cat);
		}
	}
}