<?php
     if(!defined('BASEPATH')) exit('No direct script access allowed');
   
     class Dashboard extends CI_Controller
     {

        public function __construct()
        {
	          parent::__construct();
		      $this->load->database();
		      $this->load->helper('url');
		      $this->load->library('session');
		     // $this->load->model('home_model');
        }

        public function business()
        {

          $this->load->view('front/includes/header-dashboard');
          $this->load->view('front/includes/sidebar');
          $this->load->view('front/business_dashboard');
          $this->load->view('front/includes/footer-dashboard');
        }
        public function client()
        {

          $this->load->view('front/includes/header-dashboard');
          $this->load->view('front/includes/sidebar');
          $this->load->view('front/client_dashboard');
          $this->load->view('front/includes/footer-dashboard');
        }
		
     }

?>