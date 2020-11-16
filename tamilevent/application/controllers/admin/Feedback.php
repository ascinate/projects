<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Feedback extends CI_Controller
   {

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->model('admin/feedback_model');
    }

    public function index()
    {
      $data['users'] = $this->feedback_model->get_feedback_master();
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/feedbacks',$data);
  	  $this->load->view('admin/inc/footer');
    }

    public function add()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addfeedback');
  	  $this->load->view('admin/inc/footer');
    }
    public function insert(){
      $data = array('post_date'=>$this->input->post('date'),
                    'rating'=>$this->input->post('rating'),
                    'feedback'=>$this->input->post('feedback'),
                    'project_id'=>$this->input->post('project_id'),
                    'business_id'=>$this->input->post('business_name'),
                    'client_id'=>$this->input->post('user_name'));
                                

      $this->feedback_model->feedback_insert($data);
      redirect("admin/feedback/");

  }
   public function delete()
   {
      $id=$this->uri->segment(4);
      $this->feedback_model->delete_feedback($id);
      redirect("admin/feedback/");
    }

    public function edit()
    {
      $id=$this->uri->segment(4);
      $data['users']=$this->feedback_model->get_feedback_value($id);
        
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/editfeedback',$data);
      $this->load->view('admin/inc/footer');

    }
    public function update()
    {
       $id=$this->uri->segment(4);
       $data = array(
                'post_date'=>$this->input->post('date'),
                'rating'=>$this->input->post('rating'),
                'feedback'=>$this->input->post('feedback'),
                'project_id'=>$this->input->post('project_id'),
                'business_id'=>$this->input->post('business_name'),
                'client_id'=>$this->input->post('user_name')
              );
             $this->feedback_model->update($id,$data);
             redirect("admin/feedback/");
         }
}

?>