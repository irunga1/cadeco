<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data["view"] ="home/index";
		$this->load->view('cd_template',$data);
	}
}
