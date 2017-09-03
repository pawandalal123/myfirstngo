<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
	function __construct() {
    	parent::__construct();
		error_reporting(E_ALL & ~E_NOTICE);
		
		$this->load->library('session');
		$this->load->library('image_lib');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->model("frontend_model");
	}

	//--------------------Staic Pages-----------------// 
	public function index()
	{
		$slug = 'team';
		$data['details'] = $this->frontend_model->pages_details($slug);
		$this->load->view('pages',$data);
	}
}
