<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	function __construct(){
		parent::__construct();
		
	}

	public function new_reg()
	{
		//echo "ini method index pada controller belajar";
		//$this->load->view('templates/header', $data);
		$this->load->view('register');
		//$this->load->view('templates/footer');
	}
}