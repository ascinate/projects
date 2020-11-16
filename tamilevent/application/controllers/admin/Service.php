<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Service extends CI_Controller
   {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('admin/service_model');
    }

    public function index()
    {
      $data['services'] = $this->service_model->get_service_list();
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/services',$data);
  	  $this->load->view('admin/inc/footer');
    }

    public function add()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addservice');
  	  $this->load->view('admin/inc/footer');
    }


    public function insert()
    {
      
        $data = array('services'=>$this->input->post('service_name'));

        $this->service_model->insert($data);
        redirect('admin/service');
    }
     public function delete()
      {
          $id = $this->uri->segment(4);
          
          $query = $this->service_model->delete($id);
          redirect('admin/service');
      }



      public function edit()
     {
          $id=$this->uri->segment(4);
          $data['services']=$this->service_model->get_service_value($id);
            
          $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/edit_service',$data);
          $this->load->view('admin/inc/footer');

    }
   
    public function update()
    {
          $id=$this->uri->segment(4);
          $data = array('services'=>$this->input->post('service_name')
          );

          $this->service_model->update($id,$data);
          redirect('admin/service');

    }


  }
  ?>