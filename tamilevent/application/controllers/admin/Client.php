<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Client extends CI_Controller
   {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('admin/client_model');
    }

    public function index()
    {
      $data['clients'] = $this->client_model->get_client_list();
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/clients',$data);
  	  $this->load->view('admin/inc/footer');
    }

    public function add()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addclient');
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
      $image2 =$_FILES['userfile2']['name'];
      $photo_tmp2 =$_FILES['userfile2']['tmp_name'];
      $dir2 = 'uploads';

      if ($image2!="") {

      move_uploaded_file($photo_tmp2, $dir2."/".$image2);
      }
      $data = array( 'description'=>$this->input->post('description'),
                     'other_description'=>$this->input->post('other_description'),
                     'portfolio_image'=>$image,
                     'cover_image'=>$image2,
                     'first_name'=>$this->input->post('first_name'),
                     'last_name'=>$this->input->post('last_name'),
                     'password'=> $this->input->post('password'),
                     'email'=>$this->input->post('email'),
                     'country'=>$this->input->post('country'),
                     'user_type'=>'Client'

                );

        $this->client_model->insert($data);
        redirect('admin/client');
    }


      public function delete()
        {
          $id = $this->uri->segment(4);
          
          $query = $this->client_model->delete($id);
          redirect('admin/client');
        }



      public function edit()
     {
          $id=$this->uri->segment(4);
          $data['users']=$this->client_model->get_user_value($id);
            
          $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/edit_client',$data);
          $this->load->view('admin/inc/footer');

    }
     public function view()
     {
          $id=$this->uri->segment(4);
          $data['users']=$this->client_model->get_user_value($id);
            
          $this->load->view('admin/inc/header');
          $this->load->view('admin/inc/sidebar');
          $this->load->view('admin/all_clients',$data);
          $this->load->view('admin/inc/footer');

    }
   
    public function update()
    {

         $id=$this->uri->segment(4);
          $image =$_FILES['userfile']['name'];
          $photo_tmp =$_FILES['userfile']['tmp_name'];
          $dir = 'uploads';

          $image2 =$_FILES['userfile2']['name'];
          $photo_tmp2 =$_FILES['userfile2']['tmp_name'];
          $dir2 = 'uploads';

          if ($image!="") {

          move_uploaded_file($photo_tmp, $dir."/".$image);
           $data = array(
                  'description'=>$this->input->post('description'),
                  'other_description'=>$this->input->post('other_description'),
                  'portfolio_image'=>$image,
                  'first_name'=>$this->input->post('first_name'),
                  'last_name'=>$this->input->post('last_name'),
                  'password'=> $this->input->post('password'),
                  'email'=>$this->input->post('email'),
                  'country'=>$this->input->post('country'),
                  'user_type'=>$this->input->post('user_type')
                );

          }
          if ($image2!="") {

          move_uploaded_file($photo_tmp2, $dir."/".$image2);
           $data = array(
                  'description'=>$this->input->post('description'),
                  'other_description'=>$this->input->post('other_description'),
                  'cover_image'=>$image2,
                  'first_name'=>$this->input->post('first_name'),
                  'last_name'=>$this->input->post('last_name'),
                  'password'=> $this->input->post('password'),
                  'email'=>$this->input->post('email'),
                  'country'=>$this->input->post('country'),
                  'user_type'=>$this->input->post('user_type')
                );

          }

          
          else{
             $data = array(
                  'description'=>$this->input->post('description'),
                  'other_description'=>$this->input->post('other_description'),
                  'first_name'=>$this->input->post('first_name'),
                  'last_name'=>$this->input->post('last_name'),
                  'password'=> $this->input->post('password'),
                  'email'=>$this->input->post('email'),
                  'country'=>$this->input->post('country'),
                  'user_type'=>$this->input->post('user_type'));
              }
            
            $this->client_model->update($id,$data);
            redirect('admin/client');

    }

   }
   ?>