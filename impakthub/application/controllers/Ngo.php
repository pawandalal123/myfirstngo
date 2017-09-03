<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngo extends CI_Controller {
	function __construct() {
    	parent::__construct();
		error_reporting(E_ALL & ~E_NOTICE);
		
		$this->load->library('session');
		$this->load->library('image_lib');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->model("administrator_model");
	}

	public function registration_step1()
	{
		$this->load->view('ngo_registration_step1');
	}
	public function registration_step2()
	{
		$this->load->view('ngo_registration_step2');
	}
	public function registration_step3()
	{
		$this->load->view('ngo_registration_step3');
	}
	public function registration_step4()
	{
		$this->load->view('ngo_registration_step4');
	}
	public function registration_step5()
	{
		$this->load->view('ngo_registration_step5');
	}
}
