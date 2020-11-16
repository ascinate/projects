<?php
     error_reporting(0);
     if(!defined('BASEPATH')) exit('No direct script access allowed');
   
     class Users extends CI_Controller
     {

        public function __construct()
        {
          parent::__construct();
          $this->load->model('admin_model');
          $this->load->database();
          $this->load->helper('url');
        }

        public function index()
        {
          $result['users'] = $this->admin_model->get_user_list();

          $this->load->view('administrator/includes/top-header');
          $this->load->view('administrator/includes/header');
          $this->load->view('administrator/includes/sidebar');
          $this->load->view('administrator/users', $result);
          $this->load->view('administrator/includes/footer');
        }

        public function add()
        {
          $this->load->view('administrator/includes/top-header');
          $this->load->view('administrator/includes/header');
          $this->load->view('administrator/includes/sidebar');
          $this->load->view('administrator/adduser');
          $this->load->view('administrator/includes/footer');
        }

        public function edit()
        {
         $id = $this->uri->segment(4);
         $result = $this->admin_model->get_user_data($id);

          if($result)
			   {
			   $data['users'] =  $result;
			   }
		
          $this->load->view('administrator/includes/top-header');
          $this->load->view('administrator/includes/header');
          $this->load->view('administrator/includes/sidebar');
          $this->load->view('administrator/edituser',$data);
          $this->load->view('administrator/includes/footer');
        }

      



        public function deleteuser()
        {
          $id = $this->input->post('id');
          
          $query = $this->admin_model->delete_user($id);
          redirect('admin/users', 'refresh');
        }
     }
  ?>