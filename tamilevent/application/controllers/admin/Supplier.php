<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Supplier extends CI_Controller
   {

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->model('admin/supplier_model');
    }
    public function index()
    {
     $data['users'] = $this->supplier_model->get_supplier_master();
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/suppliers',$data);
      $this->load->view('admin/inc/footer');
    }

    public function add()
    {
      
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addsupplier');
      $this->load->view('admin/inc/footer');
    }
     public function insert(){

    $image = $_FILES['userfile']['name'];
    $photo_tmp = $_FILES['userfile']['tmp_name'];
    $dir = 'uploads';

    if ($image!="") {
    
      move_uploaded_file($photo_tmp, $dir."/".$image);
    }  
      $data = array('portfolio_img'=>$image,
                    'user_id'=>$this->input->post('user_name'),
                   'caption'=>$this->input->post('caption'));
       $this->supplier_model->supplier_insert($data);
       redirect("admin/supplier");
   }
    public function edit()
    {
      $id=$this->uri->segment(4);
      $data['users']=$this->supplier_model->get_supplier_value($id);
        
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/editsupplier',$data);
      $this->load->view('admin/inc/footer');

    }
     public function delete()
   {
      $id=$this->uri->segment(4);
      $this->supplier_model->delete_supplier($id);
      redirect("admin/supplier");
    }
     public function update()
    {
      $id=$this->uri->segment(4);
      $image = $_FILES['userfile']['name'];
      $photo_tmp = $_FILES['userfile']['tmp_name'];
      $dir = 'uploads';

    if ($image!="") {
    
      move_uploaded_file($photo_tmp, $dir."/".$image);
      
      $data = array('portfolio_img'=>$image,
                            'user_id'=>$this->input->post('user_name'),

                   'caption'=>$this->input->post('caption'));
    } 
    else {
       $data = array('caption'=>$this->input->post('caption'));
     } 
      
       $this->supplier_model->update($id,$data);
       redirect("admin/supplier");
     }
 }

?>