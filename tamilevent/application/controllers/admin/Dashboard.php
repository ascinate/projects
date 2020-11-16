<?php
   if(!defined('BASEPATH')) exit('No direct script access allowed');
 
   class Dashboard extends CI_Controller
   {

    public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
  	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/dashboard');
  	  $this->load->view('admin/inc/footer');
    }
		
		public function users()
    {
      $data['users'] = $this->admin_model->get_user_list();

		  $this->load->view('admin/inc/header');
		  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/users',$data);
		  $this->load->view('admin/inc/footer');
    }
		
		public function adduser()
    {
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/adduser');
      $this->load->view('admin/inc/footer');
    }
    public function posts()
    {
      
      $data['users'] = $this->admin_model->get_post_list();

      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/posts',$data);
      $this->load->view('admin/inc/footer');
    }
    
    public function addpost()
    {
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addpost');
      $this->load->view('admin/inc/footer');
    }
      public function insertuser()
        {
        $photo = $_FILES['userfile']['name'];
        $photo_tmp=$_FILES['userfile']['tmp_name'];
        $dir='uploads';

        if($photo!="")
        {
          move_uploaded_file($photo_tmp, $dir."/".$photo);
        }


        $photo2= $_FILES['userfile2']['name'];
        $photo_tmp2=$_FILES['userfile2']['tmp_name'];
        $dir='uploads';

        if($photo2!="")
        {
          move_uploaded_file($photo_tmp2, $dir."/".$photo2);
        }

       $data = array(
              'username'=>$this->input->post('user_name'),
              'password'=>md5($this->input->post('password')),
              'displayname'=>$this->input->post('displayname'),
              'about'=> $this->input->post('about'),
              'location'=>$this->input->post('location'),
              'website'=>$this->input->post('website'),
              'email'=>$this->input->post('email'),
              'phone'=>$this->input->post('phone'),
              'cover_image'=>$photo,
              'portfolio_image'=>$photo2

       );
   
      
     ///////////////////// Model Call /////////////////

      $query = $this->admin_model->user_insert($data);
      redirect('admin/dashboard/users');
        }

   public function delete()
    {
      
      $id=$this->uri->segment(4);
      $this->admin_model->delete_user($id);
      redirect("admin/dashboard/users");

    }

    public function edit()

    {
      $id=$this->uri->segment(4);
      $data['users']=$this->admin_model->get_user_value($id);
        
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/edit_form',$data);   
      $this->load->view('admin/inc/footer');

    }
      public function update()
    {
       $id=$this->uri->segment(4);
        //$id=$this->input->post('user_id');
        $photo = $_FILES['userfile']['name'];
        $photo_tmp=$_FILES['userfile']['tmp_name'];
        
        $dir='uploads';
        
        if($photo!="")
        {
          move_uploaded_file($photo_tmp, $dir."/".$photo);
        }

        $photo2= $_FILES['userfile2']['name'];
        $photo_tmp2=$_FILES['userfile2']['tmp_name'];
        $dir='uploads';
        
        if($photo2!="")
        {
          move_uploaded_file($photo_tmp2, $dir."/".$photo2);
        }



         $data = array(
                'username'=>$this->input->post('user_name'),
                'password'=>md5($this->input->post('password')),
                'displayname'=>$this->input->post('displayname'),
                'about'=> $this->input->post('about'),
                'location'=>$this->input->post('location'),
                'website'=>$this->input->post('website'),
                'email'=>$this->input->post('email'),
                'phone'=>$this->input->post('phone'),
                'cover_image'=>$photo,
                'portfolio_image'=>$photo2
         );

        $this->admin_model->update($id,$data);
    }



        public function insertpost()
          {
          $photo = $_FILES['userfile']['name'];
          $photo_tmp=$_FILES['userfile']['tmp_name'];
          $dir='uploads';

          if($photo!="")
          {
            move_uploaded_file($photo_tmp, $dir."/".$photo);
          }

           $data = array(
                      'user_id'=>$this->input->post('user_id'),
                      'poll'=>$this->input->post('poll'),
                      'message'=>$this->input->post('message'),
                      'media'=>$photo);
           
        
        ///////////////////// Model Call /////////////////

          $query=$this->admin_model->post_insert($data);
          redirect('admin/dashboard/posts');
            }

          public function delete_post()
          {
            
            $id=$this->uri->segment(4);
            $this->admin_model->delete_post($id);
            redirect("admin/dashboard/posts");

          }
    		  public function edit_post()

          {
            $id=$this->uri->segment(4);
            $data['users']=$this->admin_model->get_post_value($id);
              
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/edit_form_post',$data);   
            $this->load->view('admin/inc/footer');

          }


          public function update_post()
          {
            $id=$this->uri->segment(4);
            $photo = $_FILES['userfile']['name'];
            $photo_tmp=$_FILES['userfile']['tmp_name'];
            $dir='uploads';

            if($photo!="")
            {
              move_uploaded_file($photo_tmp, $dir."/".$photo);
            }

             $data = array(
                        'user_id'=>$this->input->post('user_id'),
                        'poll'=>$this->input->post('poll'),
                        'message'=>$this->input->post('message'),
                        'media'=>$photo);
             

            $this->admin_model->update_post_p($id,$data);
          }









    
        public function bookmarks()
    {
      
      $data['users'] = $this->admin_model->get_bookmark_list();

      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/bookmarks',$data);
      $this->load->view('admin/inc/footer');
    }
    
    public function addbookmark()
    {
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addbookmark');
      $this->load->view('admin/inc/footer');
    }

    public function insertbookmark()
      {
      $photo = $_FILES['userfile']['name'];
      $photo_tmp=$_FILES['userfile']['tmp_name'];
      $dir='uploads';

      if($photo!="")
      {
        move_uploaded_file($photo_tmp, $dir."/".$photo);
      }

       $data = array(
                  'user_id'=>$this->input->post('user_id'),
                  'item_id'=>$this->input->post('item_id'),
                  'item_type'=>$photo);
       
    
    ///////////////////// Model Call /////////////////

      $query=$this->admin_model->bookmark_insert($data);
      redirect('admin/dashboard/bookmarks');
        }


         public function delete_bookmark()
          {
            
            $id=$this->uri->segment(4);
            $this->admin_model->delete_bookmark($id);
            redirect("admin/dashboard/bookmarks");

          }
          public function edit_bookmark()

          {
            $id=$this->uri->segment(4);
            $data['users']=$this->admin_model->get_bookmark_value($id);
              
            $this->load->view('admin/inc/header');
            $this->load->view('admin/inc/sidebar');
            $this->load->view('admin/edit_form_bookmark',$data);   
            $this->load->view('admin/inc/footer');

          }

            public function update_bookmark()
          {
            $id=$this->uri->segment(4);
            $photo = $_FILES['userfile']['name'];
      $photo_tmp=$_FILES['userfile']['tmp_name'];
      $dir='uploads';

      if($photo!="")
      {
        move_uploaded_file($photo_tmp, $dir."/".$photo);
      }

       $data = array(
                  'user_id'=>$this->input->post('user_id'),
                  'item_id'=>$this->input->post('item_id'),
                  'item_type'=>$photo);
       

            $this->admin_model->update_bookmark_b($id,$data);
          }

	 }
?>