<?php

class Location extends CI_Controller 
{
  
public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->model('admin/locations_model');
    }
    public function index()
    {
     $data['users'] = $this->locations_model->get_location_list();
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/locationss',$data);
      $this->load->view('admin/inc/footer');

      

    }
    public function insert(){
    $data = array('location'=>$this->input->post('location'),
                 'country_id'=>$this->input->post('country'));
    $this->locations_model->insert($data);
    redirect("admin/location");
    }
     public function add()
    {
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addlocation');
      $this->load->view('admin/inc/footer');
  }
    public function delete()
   {
      $id=$this->uri->segment(4);
      $this->locations_model->delete_location($id);
      redirect("admin/location");
    }
    public function edit()
    {
      $id=$this->uri->segment(4);
      $data['users']=$this->locations_model->get_location_value($id);
        
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/editlocation',$data);
      $this->load->view('admin/inc/footer');

    }
    public function update()
    {
       $id=$this->uri->segment(4);
       $data = array(
                'location'=>$this->input->post('location'),
                'country_id'=>$this->input->post('country'));
                
             $this->locations_model->update($id,$data);
             redirect("admin/location");
         }
}
?>