<?php
     if(!defined('BASEPATH')) exit('No direct script access allowed');
   
     class Signup extends CI_Controller
     {

        public function __construct()
        {
	        parent::__construct();
		      $this->load->helper('url');
		      $this->load->library('session');
		      $this->load->model('signup_model');

        }

        public function index()
        {
          $data['events'] = $this->signup_model->get_event_master();
          $data['services']=$this->signup_model->get_service_master();
          $data['country'] = $this->signup_model->get_country_master();
          $data['rates'] = $this->signup_model->get_rate_master();


		      $this->load->view('front/includes/top-header');
          $this->load->view('front/signup',$data);
          $this->load->view('front/includes/footer');
        }

        public function userinsert()
        {
         
           $data = array( 'first_name'=>$this->input->post('first_name'),
                        'last_name'=>$this->input->post('last_name'),
                        'password'=> $this->input->post('password'),
                        'email'=>$this->input->post('email'),
                        'country'=>$this->input->post('country'));

            $result = $this->signup_model->user_insert($data);
            $lastid = $this->db->insert_id();

            if($lastid)
            {
              $arr = array('event_type' => implode(",", $this->input->post('event_type')),
                           'locations' => implode(",", $this->input->post('locations')),
                           'services' => implode(",", $this->input->post('services')),
                           'rate' => $this->input->post('rate'));

              $this->db->where('id', $lastid);
              $this->db->update('user_master',$arr);
              redirect('/');
            }

        }

        
		
     }

?>