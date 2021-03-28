<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membresias extends CI_Controller {

	public function index()
	{
		$data["view"] ="membresias/index2";
		$this->load->view('cd_template_principal',$data);
	}
	public function base(){
		echo base_url();
	}
}
