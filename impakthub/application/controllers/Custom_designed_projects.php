<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_designed_projects extends CI_Controller {
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
		$slug = 'custom-designed-projects';
		$data['details'] = $this->frontend_model->pages_details($slug);
		$this->load->view('pages',$data);
	}
}
