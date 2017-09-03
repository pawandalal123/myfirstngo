<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Development_agency extends CI_Controller {
	function __construct() {
    	parent::__construct();
		
		$this->load->model("Dev_agency_master");
	}

	public function registration_step1()
	{
		$loginuserid=1;
		$condition = array('dev_id'=>$loginuserid);
		$getdetails = $this->Dev_agency_master->getBy($condition);
		if($this->input->post('developersavestepone'))
		{

			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('dev_department', 'Department', 'trim|required');
			$this->form_validation->set_rules('dev_state', 'State', 'trim|required');
			$this->form_validation->set_rules('dev_city', 'City', 'trim|required');
			$this->form_validation->set_rules('dev_address', 'Address', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('dev_region'=> $dev_region,
									 'dev_dept_name'=> $dev_department,
									 'dev_website'=> $dev_website,
									 'dev_address'=> $dev_address,
									 'dev_state'=> $dev_state,
				                     'dev_city'=> $dev_city,
				                     'dev_sector'=>$dev_sector);
				if($getdetails->last_upadted_step=='')
				{
					$upadtedata['last_upadted_step']='first';
					$upadtedata['last_upadted_step_status']='c';
				}
				
				$update = $this->Dev_agency_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					redirect(SITE_URL.'development_agency/registration_step2/');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('dev_agency_registration_step1',$this->data);
	}
	public function registration_step2()
	{
		$loginuserid=1;
		$condition = array('dev_id'=>$loginuserid);
		$getdetails = $this->Dev_agency_master->getBy($condition);
		if($getdetails->last_upadted_step=='' || ($getdetails->last_upadted_step=='first' && $getdetails->last_upadted_step_status=='i'))
		{
			$msg='Please complete first step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'development_agency/registration_step1');

		}
		if($this->input->post('developersavesteptwo'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('sectorofintres', 'Sector of intrest', 'trim|required');
			$this->form_validation->set_rules('dev_sub_sector', 'State', 'trim|required');
			// $this->form_validation->set_rules('dev_city', 'City', 'trim|required');
			// $this->form_validation->set_rules('dev_address', 'Address', 'trim|required|integer');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('dev_sector_of_interest'=> $sectorofintres,
									 'dev_sub_sector'=> $dev_sub_sector,
									 'dev_verification'=> $dev_verification,
									 'dev_full_reporting'=> $dev_full_reporting,
									 'dev_timelines'=> $dev_timelines,
				                     'dev_ROI'=> $dev_ROI,
				                     'dev_promise_vs_delivery'=>$dev_promise_vs_delivery,
				                     'dev_impact_measure'=>$dev_impact_measure,
				                     'dev_goals_startegy'=>$dev_goals_startegy,
				                     'dev_scale'=>$dev_scale,
				                     'dev_sustain'=>$dev_sustain,
				                     'dev_self_sustain'=>$dev_self_sustain,
				                     'dev_comm_csr'=>$dev_comm_csr,
				                     'dev_outcomes'=>$dev_outcomes);
				if($getdetails->last_upadted_step=='first')
				{
					$upadtedata['last_upadted_step']='second';
					$upadtedata['last_upadted_step_status']='c';
				}
				
				$update = $this->Dev_agency_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					redirect(SITE_URL.'development_agency/registration_step3');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('dev_agency_registration_step2',$this->data);
	}
	public function registration_step3()
	{
		$loginuserid=1;
		$condition = array('dev_id'=>$loginuserid);
		$getdetails = $this->Dev_agency_master->getBy($condition);
		if($getdetails->last_upadted_step=='' || ($getdetails->last_upadted_step=='first' && $getdetails->last_upadted_step_status=='i'))
		{
			$msg='Please complete first step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'development_agency/registration_step1');

		}
		elseif($getdetails->last_upadted_step=='second' && $getdetails->last_upadted_step_status=='i')
		{
			$msg='Please complete second step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'development_agency/registration_step2');

		}
		if($this->input->post('developersavestepthree'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('dev_total_funds', 'Funds to be deployed', 'trim|required');
			$this->form_validation->set_rules('dev_no_of_proj', 'Target No of Projects', 'trim|required|integer');
			// $this->form_validation->set_rules('dev_city', 'City', 'trim|required');
			// $this->form_validation->set_rules('dev_address', 'Address', 'trim|required|integer');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('dev_total_funds'=>$dev_total_funds,
				                     'dev_no_of_proj'=>$dev_no_of_proj,
				                     'dev_geo_area'=>$dev_geo_area,
				                     'dev_ngo_exp'=>$dev_ngo_exp,
				                     'dev_ngo_size'=>$dev_ngo_size,
				                     'dev_min_amount'=>$dev_min_amount,
				                     'dev_max_amount'=>$dev_max_amount,
				                     'dev_no_of_ngo'=>$dev_no_of_ngo);
				if($getdetails->last_upadted_step=='second')
				{
					$upadtedata['last_upadted_step']='three';
					$upadtedata['last_upadted_step_status']='c';
				}
				$update = $this->Dev_agency_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					redirect(SITE_URL.'development_agency/registration_step4');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('dev_agency_registration_step3',$this->data);
	}
	public function registration_step4()
	{
		$loginuserid=1;
		$condition = array('dev_id'=>$loginuserid);
		$getdetails = $this->Dev_agency_master->getBy($condition);
		if($getdetails->last_upadted_step=='' || ($getdetails->last_upadted_step=='first' && $getdetails->last_upadted_step_status=='i'))
		{
			$msg='Please complete first step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'development_agency/registration_step1');

		}
		elseif($getdetails->last_upadted_step=='second' && $getdetails->last_upadted_step_status=='i')
		{
			$msg='Please complete second step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'development_agency/registration_step2');

		}
		elseif($getdetails->last_upadted_step=='three' && $getdetails->last_upadted_step_status=='i')
		{
			$msg='Please complete third step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'development_agency/registration_step3');

		}
		if($this->input->post('stepfour'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			$this->form_validation->set_rules('designation', 'designation', 'trim|required');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|integer');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('dev_name_of_person'=>$name,
				                     'dev_email'=>$email,
				                     'dev_phone'=>$phone,
				                     'status'=>'c',
				                     'dev_designation'=>$designation);
				if($getdetails->last_upadted_step=='three')
				{
					$upadtedata['last_upadted_step']='four';
					$upadtedata['last_upadted_step_status']='c';
				}
				$update = $this->Dev_agency_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					$msg='Details save';
			       $this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
					redirect(SITE_URL.'development_agency/registration_step1');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('dev_agency_registration_step4',$this->data);
	}

	function check_default($post_string)
	{
	  return $post_string == '0' ? FALSE : TRUE;
	}
}
