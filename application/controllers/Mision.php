<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mision extends CI_Controller {

	public function index()
	{
		$data["view"] ="mision/index";
		$this->load->view('cd_template',$data);
	}
	public function base(){
		echo base_url();
	}
}
