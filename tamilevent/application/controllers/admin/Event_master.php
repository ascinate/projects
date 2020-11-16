<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Event_master extends CI_Controller
   {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('admin/event_master_model');
    }

    public function index()
    {
      $data['event_master'] = $this->event_master_model->get_event_master_list();
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/event_masters',$data);
  	  $this->load->view('admin/inc/footer');
    }

    public function add()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addevent_master');
  	  $this->load->view('admin/inc/footer');
    }


    public function insert()
    {
        
        $data = array('user_id'=>$this->input->post('user_name'),
                      'event_title'=>$this->input->post('event_title'),
                      'date_of_event'=>$this->input->post('date_of_event'),
                      'event_list'=>$this->input->post('event_list'),
                      'country'=>$this->input->post('country'),
                      'guest_no'=>$this->input->post('guest_no'),
                      'description'=>$this->input->post('description'),
        );

        $this->event_master_model->insert($data);
        redirect('admin/event_master');
    }
     public function delete()
      {
          $id = $this->uri->segment(4);
          
          $query = $this->event_master_model->delete($id);
          redirect('admin/event_master');
      }



      public function edit()
     {
          $id=$this->uri->segment(4);
          $data['event_master']=$this->event_master_model->get_event_master_value($id);
            
          $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/edit_event_master',$data);
          $this->load->view('admin/inc/footer');

    }
   
    public function update()
    {
        
            $id=$this->uri->segment(4);
            $data = array(
                          'user_id'=>$this->input->post('user_name'),
                          'event_title'=>$this->input->post('event_title'),
                          'date_of_event'=>$this->input->post('date_of_event'),
                          'event_list'=>$this->input->post('event_list'),
                          'country'=>$this->input->post('country'),
                          'guest_no'=>$this->input->post('guest_no'),
                          'description'=>$this->input->post('description'),
            );
          $this->event_master_model->update($id,$data);
          redirect('admin/event_master');

    }


  }
  ?>