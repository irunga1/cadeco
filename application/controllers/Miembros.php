<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miembros extends CI_Controller {

	public function index()
	{
		$data["view"] ="miembros/index";
		$this->load->view('cd_template',$data);
	}
	public function base(){
		echo base_url();
	}
}
