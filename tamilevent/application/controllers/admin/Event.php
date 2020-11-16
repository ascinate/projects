<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Event extends CI_Controller
   {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('admin/event_model');
    }

    public function index()
    {
      $data['events'] = $this->event_model->get_event_list();
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/events',$data);
  	  $this->load->view('admin/inc/footer');
    }

    public function add()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addevent');
  	  $this->load->view('admin/inc/footer');
    }


    public function insert()
    {
      
        $data = array('event_name'=>$this->input->post('event_name'));

        $this->event_model->insert($data);
        redirect('admin/event');
    }
     public function delete()
      {
          $id = $this->uri->segment(4);
          
          $query = $this->event_model->delete($id);
          redirect('admin/event');
      }



      public function edit()
     {
          $id=$this->uri->segment(4);
          $data['events']=$this->event_model->get_event_value($id);
            
          $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/edit_event',$data);
          $this->load->view('admin/inc/footer');

    }
   
    public function update()
    {
          $id=$this->uri->segment(4);
          $data = array('event_name'=>$this->input->post('event_name')
                

                );

        $this->event_model->update($id,$data);
        redirect('admin/event');

    }


  }
  ?>