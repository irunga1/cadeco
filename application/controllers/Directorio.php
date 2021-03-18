<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Directorio extends CI_Controller {

	public function index()
	{
		$data["view"] ="directorio/index";
		$this->load->view('cd_template',$data);
	}
	public function base(){
		echo base_url();
	}
}
