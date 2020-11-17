<?php
     if(!defined('BASEPATH')) exit('No direct script access allowed');
   
     class Supplier extends CI_Controller
     {

        public function __construct()
        {
	        parent::__construct();
		      $this->load->helper('url');
		      $this->load->library('session');
		     $this->load->model('supplier_model');

        }

        public function index()
        {
          $data['events'] = $this->supplier_model->get_event_master();
          $data['services']=$this->supplier_model->get_service_master();
          $data['country'] = $this->supplier_model->get_country_master();
          $data['rates'] = $this->supplier_model->get_rate_master();
          $data['users'] = $this->supplier_model->get_user_master();


		  //$this->load->view('front/includes/top-header');
          $this->load->view('front/suppliers',$data);
          $this->load->view('front/includes/footer');
        }


        public function profile()
        {
            $id=$this->uri->segment(3);
            $data['supplier_profile'] = $this->supplier_model->get_supplier_profile($id);
            $this->load->view('front/suppliers_profile',$data);
            $this->load->view('front/includes/footer');

        }
        

        
		
     }

?>