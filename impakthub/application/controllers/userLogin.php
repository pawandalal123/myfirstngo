<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserLogin extends CI_Controller {	
	function __construct() {
    	parent::__construct();
	}	
	
			public function login()
			{
				if($this->session->userdata('logged_in'))
				{
					redirect(SITE_URL);
				}
				if($this->input->post('userlogin'))
				{
					$this->CheckUserLogin();
				}
			
				
				$this->load->view('userlogin'); 
			}
			// public function mainlogin()
			// {
			// 	if($this->session->userdata('logged_in'))
			// 	{
			// 		redirect(SITE_URL);
			// 	}
			// 	if($this->input->post('userlogin'))
			// 	{
			// 		$this->CheckUserLogin();
			// 	}
			
			// 	$this->data['view_file'] = 'web/mainlogin';
			// 	$this->load->view('layouts/testDefault', $this->data); 
			// }
			// 	public function signup()
			// {
			// 	if($this->session->userdata('logged_in'))
			// 	{
			// 		redirect(SITE_URL);
			// 	}
			// 	if($this->input->post('userlogin'))
			// 	{
			// 		$this->registerwithus();
			// 	}
			
			// 	$this->data['view_file'] = 'web/signup';
			// 	$this->load->view('layouts/testDefault', $this->data); 
			// }
			public function register()
			{
				if($this->session->userdata('logged_in'))
				{
					redirect(SITE_URL);
				}
				
				if($this->input->post('registerwithus'))
				{
					$this->registerwithus();
				}
				//$this->data['view_file'] = 'web/register';
				$this->load->view('userregister'); 
			}
			 public function CheckUserLogin()
		     {
			               							
                $userLoginDetails = $this->input->post();
				$where="email = '".$userLoginDetails['useremail']."' and password='".md5($userLoginDetails['password'])."' and first_login=1";
				$this->form_validation->set_rules('useremail', 'email', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');
                
                $CheckLoginQuery = $this->db->where($where)
		 		                     ->get('users');	
				//echo $this->db->last_query();
				$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
                if ($this->form_validation->run())
                 {
					 if($CheckLoginQuery->num_rows() > 0)
					 {
							$CheckLoginData = $CheckLoginQuery->row();
					       $newdata = array(
                         //  'username'  => 'johndoe',
									   'UserId'     => $CheckLoginData->id,
			                           'email'     => $CheckLoginData->email_id,
									   'mobile'    => $CheckLoginData->mobile_no,
									   'emailstatus'     => $CheckLoginData->email_status,
									   'mobilestatus'    => $CheckLoginData->mobile_status,
									   'DisplayName'    => $CheckLoginData->profile_name,
									   'DisplayAddress'    => $CheckLoginData->permanent_address,
			                           'logged_in' => TRUE
                                 );
                            $this->session->set_userdata($newdata);
                           
							redirect(SITE_URL.'user/profile');

						
						   //redirect(SITE_URL.'user/profile');
	                    
					 }
					 else
					 {
						$this->data['err_msg'] = 'Login Details Do Not Match.';  
					  }
			     }
		     }
		
			public function registerwithus()
			{
				$userData = $this->input->post();
				@extract($userData );
				$this->form_validation->set_rules('username', 'Name', 'required');

				$this->form_validation->set_rules('useremail', 'Email ', 'required|is_unique[users.email]');
				$this->form_validation->set_rules('usermobile', 'Mobile', 'required|callback_numeric_dash');
				$this->form_validation->set_rules('password', 'Password', 'required');
				//echo $this->db->last_query();
				$this->form_validation->set_error_delimiters('<p class="req">', '</p>');
				if ($this->form_validation->run())
				{
					$newPass = md5($password);
					$userData = array('email'=>$useremail,
					'name'=>$username,
					'token'=>md5(time().''.$useremail),
					'mobile'=>$usermobile,
					'password'=>$newPass ,
					'first_login'=>1,
					'created_at'=>date('Y-m-d H:i:s'));
					$insert = $this->db->insert('users',$userData );

					//////////// set mail to user///
					$this->load->model('common');
					
					$userLoginId = $this->db->insert_id();
					$newdata = array(
					//  'username'  => 'johndoe',
					'UserId'     => $userLoginId,
					'email'     => $useremail,
					'Loginfor'=>,
					'logged_in' => TRUE
					);
					$this->session->set_userdata($newdata);
					
				   redirect(SITE_URL.'user/profile');

					
				}
			}

		// 	function numeric_dash ($num) {
  //   return ( ! preg_match("/^([0-9-\s])+$/D", $num)) ? FALSE : TRUE;
  // }
public function numeric_dash($string) 
    {
        if ( !preg_match('/^[0-9 .,\-]+$/i',$string) )
        {
            return false;
        }
    }


			
			public function logout()
			 {
							   $newdata = array(
								 //  'username'  => 'johndoe',
								   'UserId'     => $this->session->userdata('UserId'),
								   'email'     =>$this->session->userdata('email_id'),
								   'mobile'    => $this->session->userdata('mobile_no'),
								   'emailstatus'     =>$this->session->userdata('email_status'),
								   'mobilestatus'    => $this->session->userdata('mobile_status'),
								   'DisplayName'    => $this->session->userdata('profile_name'),
								   'DisplayAddress'    =>$this->session->userdata('permanent_address'),
								   'logged_in' => TRUE
										 );
							  
				  if($this->session->userdata('templete_id'))
				  {
				  	$newdata['templete_id'] = $this->session->userdata('templete_id');

				  }
							  $this->session->unset_userdata($newdata);
							  redirect(SITE_URL);
							  
										 
			}	
	}
?>