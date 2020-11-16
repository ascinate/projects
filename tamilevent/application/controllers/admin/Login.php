<?php
     error_reporting(0);
     if(!defined('BASEPATH')) exit('No direct script access allowed');
   
     class Login extends CI_Controller
     {

        public function __construct()
        {
	          parent::__construct();
		      $this->load->database();
		      $this->load->helper('url');
		      $this->load->library('session');
              //$this->load->model('admin/admin_model');
        }

        public function index()
        {
          $this->load->view('admin/signin');
        }

        public function login_admin()
        { 
		  $email = $this->input->post('email');
		  $pass = $this->input->post('password');
		  
		  $res = $this->db->query("select * from `admin_master` where `email` = '".$email."' and `password` = '".$pass."'");
		  $numrows = $res->num_rows();
		  
	
		  if($numrows!=0)
		  {
			  $row = $res->row();
			  $this->session->set_userdata('id',$row->id);
              $this->session->set_userdata('email',$row->email);
              $this->session->set_userdata('username',$row->username);  
			  
			      if($this->session->userdata('id')!="")
				  {
					  redirect('admin/dashboard');
				  }
		
				  else
				  {
					  redirect('/?r=err', 'refresh');
				  }

		  }
		  
          $data['admins']=$this->admin_model->login();

          $this->session->set_userdata('id',$data['admins'][0]['id']);
          $this->session->set_userdata('email',$data['admins'][0]['email']);
          $this->session->set_userdata('username',$data['admins'][0]['username']);
		  
		  if($this->session->userdata('id')!="")
		  {
			  redirect('admin/dashboard');
		  }

		  else
		  {
			  redirect('/?r=err', 'refresh');
		  }

        }

        public function user_logout()
        {
          $this->session->sess_destroy();
          redirect('admin/login', 'refresh');
        }
     }
  ?>