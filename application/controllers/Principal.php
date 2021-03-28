<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$data["view"] ="home/index2";
		$this->load->view('cd_template_principal', $data);
	}

}
