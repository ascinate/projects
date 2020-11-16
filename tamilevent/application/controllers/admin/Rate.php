<?php

class Rate extends CI_Controller 
{
	
public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->model('admin/rates_model');
    }
    public function index()
    {
      $data['users'] = $this->rates_model->get_rate_list();
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/rates',$data);
      $this->load->view('admin/inc/footer');

    }
    public function insert(){
    $data = array('rate'=>$this->input->post('rate'));
    $this->rates_model->insert($data);
    redirect("admin/rate/");
    }
     public function add()
    {
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addrate');
      $this->load->view('admin/inc/footer');
    }
    public function delete()
   {
      $id=$this->uri->segment(4);
      $this->rates_model->delete_rate($id);
      redirect("admin/rate/");
    }
    public function edit()
    {
      $id=$this->uri->segment(4);
      $data['users']=$this->rates_model->get_rate_value($id);
        
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/editrate',$data);
      $this->load->view('admin/inc/footer');

    }
    public function update()
    {
       $id=$this->uri->segment(4);
       $data = array(
                'rate'=>$this->input->post('location'));
                
             $this->rates_model->update($id,$data);
             redirect("admin/rate/");
         }
}
?>