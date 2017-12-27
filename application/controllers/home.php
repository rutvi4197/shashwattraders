<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('user/main');
	}
}