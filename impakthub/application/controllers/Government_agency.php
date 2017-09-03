<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Government_agency extends CI_Controller {
	function __construct() {
    	parent::__construct();
		$this->load->model("Govt_master");
	}

	public function registration_step1()
	{
		$loginuserid=1;
		$condition = array('govt_id'=>$loginuserid);
		$getdetails = $this->Govt_master->getBy($condition);
		if($this->input->post('savefirst'))
		{

			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('department', 'Department', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('govt_dept_name'=> $department,
									 'govt_region'=> $region,
									 'govt_website'=> $website,
									 'govt_address'=> $dev_address,
									 'gov_state'=> $state,
				                     'gov_city'=> $city,
				                     'govt_sector'=>$sector);
				if($getdetails->last_upadted_step=='')
				{
					$upadtedata['last_upadted_step']='first';
					$upadtedata['last_upadted_step_status']='c';
				}
				
				$update = $this->Govt_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					redirect(SITE_URL.'Government_agency/registration_step2/');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('govt_agency_registration_step1',$this->data);
	}
	public function registration_step2()
	{
		$loginuserid=1;
		$condition = array('govt_id'=>$loginuserid);
		$getdetails = $this->Govt_master->getBy($condition);
		if($getdetails->last_upadted_step=='' || ($getdetails->last_upadted_step=='first' && $getdetails->last_upadted_step_status=='i'))
		{
			$msg='Please complete first step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'Government_agency/registration_step1');

		}
		if($this->input->post('savesteptwo'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('sectorofintres', 'Sector of intrest', 'trim|required');
			$this->form_validation->set_rules('dev_sub_sector', 'Sub sector', 'trim|required');
			// $this->form_validation->set_rules('dev_city', 'City', 'trim|required');
			// $this->form_validation->set_rules('dev_address', 'Address', 'trim|required|integer');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('govt_sector_of_interest'=> $sectorofintres,
									 'govt_sub_sector'=> $dev_sub_sector,
									 'govt_verification'=> $dev_verification,
									 'govt_full_reporting'=> $dev_full_reporting,
									 'govt_timelines'=> $dev_timelines,
				                     'govt_ROI'=> $dev_ROI,
				                     'govt_promise_vs_delivery'=>$dev_promise_vs_delivery,
				                     'govt_impact_measure'=>$dev_impact_measure,
				                     'govt_goals_startegy'=>$dev_goals_startegy,
				                     'govt_scale'=>$dev_scale,
				                     'govt_sustain'=>$dev_sustain,
				                     'govt_self_sustain'=>$dev_self_sustain,
				                     'govt_comm_csr'=>$dev_comm_csr,
				                     'govt_outcomes'=>$dev_outcomes);
				if($getdetails->last_upadted_step=='first')
				{
					$upadtedata['last_upadted_step']='second';
					$upadtedata['last_upadted_step_status']='c';
				}
				
				$update = $this->Govt_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					redirect(SITE_URL.'Government_agency/registration_step3');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('govt_agency_registration_step2',$this->data);
	}
	public function registration_step3()
	{
		$loginuserid=1;
		$condition = array('govt_id'=>$loginuserid);
		$getdetails = $this->Govt_master->getBy($condition);
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
			redirect(SITE_URL.'Government_agency/registration_step2');

		}
		if($this->input->post('savestepthree'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('dev_total_funds', 'Funds to be deployed', 'trim|required');
			$this->form_validation->set_rules('dev_no_of_proj', 'Target No of Projects', 'trim|required|integer');
			// $this->form_validation->set_rules('dev_city', 'City', 'trim|required');
			// $this->form_validation->set_rules('dev_address', 'Address', 'trim|required|integer');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('govt_total_funds'=>$dev_total_funds,
				                     'govt_no_of_proj'=>$dev_no_of_proj,
				                     'govt_geo_area'=>$dev_geo_area,
				                     'govt_ngo_exp'=>$dev_ngo_exp,
				                     'govt_ngo_size'=>$dev_ngo_size,
				                     'govt_min_amount'=>$dev_min_amount,
				                     'govt_max_amount'=>$dev_max_amount,
				                     'govt_no_of_ngo'=>$dev_no_of_ngo);
				if($getdetails->last_upadted_step=='second')
				{
					$upadtedata['last_upadted_step']='three';
					$upadtedata['last_upadted_step_status']='c';
				}
				$update = $this->Govt_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					redirect(SITE_URL.'Government_agency/registration_step4');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('govt_agency_registration_step3',$this->data);
	}
	public function registration_step4()
	{
		$loginuserid=1;
		$condition = array('govt_id'=>$loginuserid);
		$getdetails = $this->Govt_master->getBy($condition);
		if($getdetails->last_upadted_step=='' || ($getdetails->last_upadted_step=='first' && $getdetails->last_upadted_step_status=='i'))
		{
			$msg='Please complete first step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'Government_agency/registration_step1');

		}
		elseif($getdetails->last_upadted_step=='second' && $getdetails->last_upadted_step_status=='i')
		{
			$msg='Please complete second step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'Government_agency/registration_step2');

		}
		elseif($getdetails->last_upadted_step=='three' && $getdetails->last_upadted_step_status=='i')
		{
			$msg='Please complete third step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'Government_agency/registration_step3');

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
				$upadtedata = array('govt_name_of_person'=>$name,
				                     'govt_email'=>$email,
				                     'govt_phone'=>$phone,
				                     'status'=>'c',
				                     'govt_designation'=>$designation);
				if($getdetails->last_upadted_step=='three')
				{
					$upadtedata['last_upadted_step']='four';
					$upadtedata['last_upadted_step_status']='c';
				}
				$update = $this->Govt_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					$msg='Details save';
			       $this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
					redirect(SITE_URL.'Government_agency/registration_step1');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$getdetails;
		$this->load->view('govt_agency_registration_step4');
	}
}
