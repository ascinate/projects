<?php

class Country extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('admin/country_model');
		
	}
	public function index(){
	  $data['users']=$this->country_model->get_country_list();
	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/country',$data);
  	  $this->load->view('admin/inc/footer');

	}
	public function insert(){
    $data = array('country'=>$this->input->post('country'));
    $this->country_model->insert($data);
    redirect("admin/country");
    }
     public function add()
    {
      $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addcountry');
  	  $this->load->view('admin/inc/footer');


    }
    public function delete()
   {
      $id=$this->uri->segment(4);
      $this->country_model->delete_country($id);
      redirect("admin/country");
    }
    public function edit()
    {
      $id=$this->uri->segment(4);
      $data['users']=$this->country_model->get_country_value($id);
        
      $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/editcountry',$data);
      $this->load->view('admin/inc/footer');

    }
    public function update()
    {
       $id=$this->uri->segment(4);
       $data = array('country'=>$this->input->post('country'));
       $this->country_model->update($id,$data);
       redirect("admin/country");
   }
         
}


?>