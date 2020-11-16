<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Milestone extends CI_Controller
   {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('admin/milestone_model');
    }

    public function index()
    {
      $data['users'] = $this->milestone_model->get();
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/milestones',$data);
  	  $this->load->view('admin/inc/footer');
    }

    public function add()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addmilestone');
  	  $this->load->view('admin/inc/footer');
    }


    public function insert()
    {
      $id=$this->input->post('projectid');
      $milestone=$this->input->post('milestone');
      $description=$this->input->post('description');
      $Price=$this->input->post('price');
      $quantity=$this->input->post('quantity');
      $total=$Price*$quantity;
        
        $data = array('project_id'=>$id,
                      'milestone'=>$milestone,
                      'description'=>$description,
                      'unit_price'=>$Price,
                      'quantity'=>$quantity,
                      'total'=>$total);
        $this->milestone_model->insert($data);
        redirect('admin/milestone');
    }
     public function delete()
      {
          $id = $this->uri->segment(4);
          
          $query = $this->milestone_model->delete($id);
          redirect('admin/milestone');
      }



      public function edit()
     {
          $id=$this->uri->segment(4);
          $data['users']=$this->milestone_model->edit($id);
          $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/editmilestone',$data);
          $this->load->view('admin/inc/footer');

    }
   
    public function update()
    {
            $id=$this->uri->segment(4);
            $projectid=$this->input->post('projectid');
            $milestone=$this->input->post('milestone');
            $description=$this->input->post('description');
            $Price=$this->input->post('price');
            $quantity=$this->input->post('quantity');
            $total=$Price*$quantity;
        
        $data = array('project_id'=>$projectid,
                      'milestone'=>$milestone,
                      'description'=>$description,
                      'unit_price'=>$Price,
                      'quantity'=>$quantity,
                      'total'=>$total);
            
          $this->milestone_model->update($id,$data);
          redirect('admin/milestone');
    }
  }
  ?>