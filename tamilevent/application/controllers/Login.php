<?php
     if(!defined('BASEPATH')) exit('No direct script access allowed');
   
     class Login extends CI_Controller
     {

        public function __construct()
        {
	          parent::__construct();
		      $this->load->database();
		      $this->load->helper('url');
		      $this->load->library('session');
		     // $this->load->model('home_model');

        }

        
        

        public function login_user()
	 	{ 
		  $email = $this->input->post('email');
		  $pass =  $this->input->post('password');
		  
		  $res = $this->db->query("select * from `user_master` where `email` = '".$email."' and `password` = '".$pass."'");
		  $numrows = $res->num_rows();
		  
	  
		  if($numrows!=0)
		  {
			  $row = $res->row();
			  $this->session->set_userdata('id',$row->id);
			  $this->session->set_userdata('email',$row->email);
			  $this->session->set_userdata('name',$row->displayname);
			  $this->session->set_userdata('profile_image',$row->portfolio_image);   
		
			  if($this->session->userdata('id')!="")
			  {
				if($row->user_type=="Business")
				{
					redirect('dashboard/business');
				}
				else{
					redirect('dashboard/client');
				}
			  }
		  }
		  else
		  {
			  $this->session->set_flashdata('msg','Wrong email or password!');
			  redirect('/');
		  }
		  
      }
        
		 public function user_logout()
		 {
		   $this->session->sess_destroy();
		   redirect('/');
		 }

		
     }

?>