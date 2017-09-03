<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual extends CI_Controller {
	function __construct() {
    	parent::__construct();
		// error_reporting(E_ALL & ~E_NOTICE);
		
		// $this->load->library('session');
		// $this->load->library('image_lib');
		// $this->load->library('form_validation');
		// $this->load->helper('form');
		// $this->load->helper('url');
		// $this->load->database();
		$this->load->model("Individual_master");
	}

	public function registration()
	{
		$loginuserid=1;
		$condition = array('indl_id'=>$loginuserid);
		$getdetails = $this->Individual_master->getBy($condition);
		if($this->input->post('saveform'))
		{

			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('nationality', 'Nationality', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			
			if($vol=='yes')
			{
				$this->form_validation->set_rules('loction', 'loction', 'trim|required');
				$this->form_validation->set_rules('volunteer_hours', 'volunteer hours', 'trim|required');
				$this->form_validation->set_rules('volunteer_skills', 'volunteer skills', 'trim|required');
			}
			if($nationality=='Nonindian')
			{
				$this->form_validation->set_rules('passport', 'passport', 'trim|required');

			}
			if($nationality=='Foreign')
			{
				$this->form_validation->set_rules('country', 'country', 'trim|required');

			}
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('indl_name'=> $name,
									 'indl_address'=> $address,
									 'inld_city'=> $city,
									 'inld_state'=> $state,
									 'indl_phone'=> $phone,
				                     'indl_email'=> $email,
				                     'indl_mobile'=>$mobile,
				                     'indl_intrest'=>$interest,
				                     'inld_nationality'=>$nationality,
				                     'indl_volunteer'=>@$vol);
				if($nationality=='Nonindian')
				{
					$upadtedata['inld_passport']=@$passport;

				}
				if($nationality=='Foreign')
				{
					$upadtedata['inld_foreign_country']=@$country;

				}
				if($vol=='yes')
				{
					$upadtedata['indl_location']=$loction;
					$upadtedata['indl_hours']=$volunteer_hours;
					$upadtedata['inld_skills']=$volunteer_skills;
					$upadtedata['indl_prev_volunteer']=$volunteering;

				}
				$update = $this->Individual_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					$msg='save successfully';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('individual_registration');
	}
}
