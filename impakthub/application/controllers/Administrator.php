<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
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

	public function index()
	{
		if($this->session->userdata('adminid') != ''){
			redirect('administrator/dashboard');
		}
		$this->load->view('administrator/index');
	}
	
	public function login()
	{
		if($this->session->userdata('adminid') != ''){
			redirect('administrator/dashboard');
		}	
		$login_id = $this->input->post('login_id');
		$pass  = md5($this->input->post('login_password'));
		$result = $this->administrator_model->validate_user($login_id,$pass);
		if($result)
		{
			$adminid = $result['admin_id'];
			$this->session->set_userdata('adminid', $adminid);
			$loginname = $result['name'];
			$this->session->set_userdata('loginname', $loginname);
			redirect('administrator/dashboard');	   
		}
		else
		{
			redirect('administrator/index');
		}
	}
	
	function logout() {
		$this->session->unset_userdata('adminid');
		$this->session->unset_userdata('loginname');
		$this->session->sess_destroy();
		redirect('administrator/');
	}
	
	public function ChangePassword()
	{
		if($this->session->userdata('adminid') == ''){
			redirect('administrator/');
		}
		$this->load->view('administrator/change_pass');
	}
	public function changpass()
	{
		$adminid = $this->session->userdata('adminid');
		$oldpass = MD5($this->input->post('oldpass'));
		$newpass = MD5($this->input->post('newpass'));
		$data['query'] = $this->administrator_model->ChangePassword($adminid);
		$old_password = $data['query']['password'];
		//echo $old_password;
		//die();
		if($old_password==$oldpass)
		{
			$query = $this->db->query("UPDATE tbl_admin set password='".$newpass."' where admin_id='".$adminid."' and password ='".$oldpass."'");	
			if($query)
			{
				echo '<p class="sucess">Password has been sucessfully changed.</p>';
			}
		}
		else
		{
			echo '<p class="red">Your old password is not correct.</p>';
		}
		
	}
	 
	public function dashboard(){
		if($this->session->userdata('adminid') == ''){
			redirect('administrator/');
		} 
		$this->load->view('administrator/dashboard');
	}
	
	//--------------------Staic Pages-----------------// 
	public function pages()
	{
		if($this->session->userdata('adminid') == '')
		{
			redirect('administrator/');
		}
		$table = 'tbl_pages';
		$order_by = 'id';
		$data['pages'] = $this->administrator_model->select_data($table);
		$this->load->view('administrator/pages',$data);
	}
	public function edit_pages($id)
	{
		if($this->session->userdata('adminid') == '')
		{
			redirect('administrator/');
		}
		$table = 'tbl_pages';
		$data['query'] = $this->administrator_model->select_single_row($table,$id);
		$this->load->view('administrator/edit_pages',$data);
	}
	public function pages_process()
	{
		if($this->session->userdata('adminid') == '')
		{
			redirect('administrator/');
		}
		
		if(isset($_POST['BtnEditPages']))
		{
			$data = array(
			'title' => $title,
			'name' => $name,
			'date' => $date
			);
			$result = $this->administrator_model->update_pages();
			if($result)
			{
				$this->session->set_flashdata('flsh_msg', 'Page update successfully');
				redirect('administrator/pages');
			}
			else
			{
				$this->session->set_flashdata('flsh_msg1', 'Please Try Again!');
				redirect("administrator/pages");
			}
		}
	}
}
