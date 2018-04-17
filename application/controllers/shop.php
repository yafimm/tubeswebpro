<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('View_Shop');
	}
}
