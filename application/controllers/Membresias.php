<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membresias extends CI_Controller {

	public function index()
	{
		$data["view"] ="home/index";
		$this->load->view('cd_template',$data);
	}
	public function base(){
		echo base_url();
	}
}
