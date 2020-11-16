<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Category extends CI_Controller
   {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('admin/category_model');
    }

    public function index()
    {
      $data['category'] = $this->category_model->get_category_list();
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/category',$data);
  	  $this->load->view('admin/inc/footer');
    }

    public function add()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addcategory');
  	  $this->load->view('admin/inc/footer');
    }


    public function insert()
    {
        $image =$_FILES['userfile']['name'];
        $photo_tmp =$_FILES['userfile']['tmp_name'];
        $dir = 'uploads';

        if ($image!="") {

        move_uploaded_file($photo_tmp, $dir."/".$image);
        }
        
        $data = array('category_name'=>$this->input->post('category_name'),
                      'description'=>$this->input->post('description'),
                      'cat_icon'=>$image);

        $this->category_model->insert($data);
        redirect('admin/category');
    }
     public function delete()
      {
          $id = $this->uri->segment(4);
          
          $query = $this->category_model->delete($id);
          redirect('admin/category');
      }



      public function edit()
     {
          $id=$this->uri->segment(4);
          $data['category']=$this->category_model->get_category_value($id);
            
          $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/edit_category',$data);
          $this->load->view('admin/inc/footer');

    }
   
    public function update()
    {
        $id=$this->uri->segment(4);
        $image =$_FILES['userfile']['name'];
        $photo_tmp =$_FILES['userfile']['tmp_name'];
        $dir = 'uploads';

        if ($image!="") 
        {
           move_uploaded_file($photo_tmp, $dir."/".$image);

           $data = array('category_name'=>$this->input->post('category_name'),
                         'description'=>$this->input->post('description'),
                         'cat_icon'=>$image);
        }
        else
        {
            $data = array('category_name'=>$this->input->post('category_name'),
                          'description'=>$this->input->post('description')
                      );
        }   
          
          $this->category_model->update($id,$data);
          redirect('admin/category');
    }
  }
  ?>