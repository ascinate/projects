<?php
     if(!defined('BASEPATH')) exit('No direct script access allowed');
   
     class Home extends CI_Controller
     {

        public function __construct()
        {
	          parent::__construct();
		      $this->load->database();
		      $this->load->helper('url');
		      $this->load->library('session');
		      $this->load->model('home_model');

        }

        public function index()
        {


        $data['supplier'] = $this->home_model->get_supplier_master();

       	$data['category'] = $this->home_model->get_category_list();

          $this->load->view('front/includes/top-header');
		      $this->load->view('front/includes/header');
          $this->load->view('front/home',$data);
          $this->load->view('front/includes/footer');
        }
        public function signup()
        {
		  $this->load->view('front/includes/top-header');
          $this->load->view('front/signup');
          $this->load->view('front/includes/footer');
        }
        

        
		
     }

?>