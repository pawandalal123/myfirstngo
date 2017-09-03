<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corporate extends CI_Controller {
	function __construct() {
    	parent::__construct();
		// error_reporting(E_ALL & ~E_NOTICE);
		$this->load->model("corp_master");
		$this->load->model("Corp_person");
		
	}

	public function registration_step1()
	{
		$loginuserid=1;
		$condition = array('corp_id'=>$loginuserid);
		$getdetails = $this->corp_master->getBy($condition);
		if($this->input->post('submitstepone'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('company', 'Company', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('no_employee', 'Number of employee', 'trim|required|integer');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$upadtedata = array('corp_industry'=> $industry,
				                     'corp_region'=> $region,
									 'corp_turnover'=> $turnover,
									 'corp_website'=> $website,
									 'corp_company_name'=> $company,
				                     'corp_establish'=> $establishment,
									 'corp_address'=> $address,
									 'corp_state'=> $state,
				                     'corp_city'=> $city,
									 'corp_employment'=> $no_employee
	                                 );
	           	if($getdetails->last_upadted_step=='')
				{
					$upadtedata['last_upadted_step']='first';
					$upadtedata['last_upadted_step_status']='c';
				}
				$update = $this->corp_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					$msg='Details save';
			       $this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
					redirect(SITE_URL.'corporate/registration_step1');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
	            redirect(SITE_URL.'corporate/registration_step2/');
           }
		}
		$this->data['sessiondata']=$this->session->userdata;
		$this->load->view('corporate_registration_step1',$this->data);
	}
	public function registration_step2()
	{
		$loginuserid=1;
		$condition = array('corp_id'=>$loginuserid);
		$getdetails = $this->corp_master->getBy($condition);
		if($getdetails->last_upadted_step=='' || ($getdetails->last_upadted_step=='first' && $getdetails->last_upadted_step_status=='i'))
		{
			$msg='Please complete first step';
			$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
			redirect(SITE_URL.'corporate/registration_step1');

		}
       
		if($this->input->post('submitsteptwo'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('CSRsector', 'CSR sector', 'trim|required');
			$this->form_validation->set_rules('CSRsubsector', 'CSR subsector', 'trim|required');
			// $this->form_validation->set_rules('project_area', 'project area', 'trim|required');
			// $this->form_validation->set_rules('implementing_partners', 'implementing partners', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$newdata = array('CSRsector'=> $CSRsector,
			                     'CSRsubsector'=> $CSRsubsector,
								 'project_area'=> $project_area,
								 'implementing_partners'=> $implementing_partners,
								 'csr_activity'=> $csr_activity,
								 'csr_stage'=>$csr_stage,
			                     'budget_ty'=> $budget_ty,
								 'budget_ly'=> $budget_ly,
								 'spend_ty'=> $spend_ty,
			                     'spend_ly'=> $spend_ly,
								 'spend_lly'=> $spend_lly,
								 'budget_lly'=> $budget_lly,
								 'size_project'=> $size_project,
								 'employee_engagemnt'=> $employee_engagemnt,
			                     'step_two' => TRUE
	                                 );
	            if($getdetails->last_upadted_step=='first')
				{
					$upadtedata['last_upadted_step']='second';
					$upadtedata['last_upadted_step_status']='c';
				}
				
				$update = $this->corp_master->updateDetails($condition,$upadtedata);
				if($update)
				{
					redirect(SITE_URL.'corporate/registration_step3');
				}
				else
				{
					$msg='Some technical issue';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
				}
           }
		}
		$this->data['sessiondata']=$this->session->userdata;
		$this->load->view('corporate_registration_step2',$this->data);
	}
	public function registration_step3()
	{
		if(!$this->session->userdata('step_first') && !$this->session->userdata('step_second'))
		{
			redirect(SITE_URL);
		}
		if($this->input->post('submitstepthree'))
		{
			$postdata = @extract($this->input->post());
			$this->form_validation->set_rules('area', 'area', 'trim|required');
			$this->form_validation->set_rules('min_project', 'State', 'trim|required');
			$this->form_validation->set_rules('max_project', 'City', 'trim|required');
			$this->form_validation->set_rules('corp_ngo_exp', 'Number of employee', 'trim|required|integer');
			$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
			if($this->form_validation->run())
			{
				$newdata = array('area'=> $area,
					             'corp_total_funds'=> $funding,
			                     'min_project'=> $min_project,
								 'max_project'=> $max_project,
								 'sizeprefrence'=> $sizeprefrence,
								 'corp_ngo_exp'=> $corp_ngo_exp,
								 'ngo_engaged'=>$ngo_engaged,
			                     'step_three' => TRUE
	                                 );
	            $this->session->set_userdata($newdata);
	            redirect(SITE_URL.'corporate/registration_step4');
           }
		}
		$this->data['sessiondata']=$this->session->userdata;
		$this->load->view('corporate_registration_step3',$this->data);
	}
	public function registration_step4()
	{
		if(!$this->session->userdata('step_first') && !$this->session->userdata('step_second') && !$this->session->userdata('step_three'))
		{
			redirect(SITE_URL);
		}
		$this->load->model('Corp_master');
		if($this->input->post('savestepfour'))
		{
			$postdata = @extract($this->input->post());
			$sessiondata = @extract($this->session->userdata);
			
				$insertarray = array('corp_industry'=> $industry,
				                     'corp_region'=> $region,
									 'corp_turnover'=> $turnover,
									 'corp_website'=> $website,
									 'corp_company_name'=> $company,
				                     'corp_establish'=> $establishment,
									 'corp_address'=> $address,
									 'corp_state'=> $state,
				                     'corp_city'=> $city,
									 'corp_employment'=> $no_employee,
					                 'corp_csr'=> $CSRsector,
				                     'corp_sub_sector'=> $CSRsubsector,
									 'corp_existing_csr'=> $project_area,
									 'corp_ngo_partners'=> $implementing_partners,
									 'corp_years_of_csr_activity'=> $csr_activity,
				                     'corp_stage_of_csr'=> $csr_stage,
									 // 'budget_ly'=> $budget_ly,
									 // 'spend_ty'=> $spend_ty,
				      //                'spend_ly'=> $spend_ly,
									 // 'spend_lly'=> $spend_lly,
									 // 'budget_lly'=> $budget_lly,
									 'corp_total_funds'=>$corp_total_funds,
									 'corp_size_of_project'=> $size_project,
									 'corp_emp_eng'=> $employee_engagemnt,
					                 'corp_geo_area'=> $area,
			                         'corp_min_amount'=> $min_project,
								     'corp_max_amount'=> $max_project,
								     'corp_ngo_size'=> $sizeprefrence,
								     'corp_ngo_exp'=> $corp_ngo_exp,
								     'corp_target_ngo_eng'=>$ngo_engaged
	                                 );
				$makecrop = $this->Corp_master->AdduserData($insertarray);
				echo $this->db->last_query();
				if($makecrop)
				{
					$this->load->model('Corp_person');
					if(count($name)>0)
					{
						foreach($name as $key=>$val)
						{
							$insertPeopelArray = array('corp_id'=>$makecrop,
								                       'corp_name'=>$val,
								                       'corp_designation'=>$designation[$key],
								                       'corp_email'=>$email[$key],
								                       'corp_phone'=>$phone[$key]);
							$makecrop = $this->Corp_person->AdduserData($insertPeopelArray);

						}

					}
					$this->session->unset_userdata($sessiondata);
					$msg='Save successfully';
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'suc'));
					redirect(SITE_URL.'corporate/registration_step1');

				}
				else
				{
					$msg="some technical issue";
					$this->session->set_userdata( array('msg'=>$msg,'class' => 'error'));
				}
	            
           
		}
		$this->load->view('corporate_registration_step4');
	}
}
