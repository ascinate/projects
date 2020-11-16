<?php

class Project extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('admin/project_model');
	}
	public function index(){
     $data['users']= $this->project_model->get_project_master();
	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/projects',$data);
  	  $this->load->view('admin/inc/footer');
	  

	}
	public function view(){
    $id=$this->uri->segment(4);

     $data['users']= $this->project_model->get_project_master_view($id);
	  $this->load->view('admin/inc/header');
  	  $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/all_projects',$data);
  	  $this->load->view('admin/inc/footer');
	  

	}

	public function insert(){
		$data = array('user_id'=>$this->input->post('user_name'),
					'job_title'=>$this->input->post('job_title'),
					'category'=>$this->input->post('category'),
					'project_expiry'=>$this->input->post('project_expiry'),
					'project_dedline'=>$this->input->post('project_dedline'),
					'project_type'=>$this->input->post('project_type'),
					'project_price'=>$this->input->post('price'),
					'project_details'=>$this->input->post('details'),
					'project_location'=>$this->input->post('location'),
					'country'=>$this->input->post('country'));

		$this->project_model->insert($data);
		redirect("admin/project/");

	}
	public function add(){
	  $this->load->view('admin/inc/header');
      $this->load->view('admin/inc/sidebar');
      $this->load->view('admin/addproject');
      $this->load->view('admin/inc/footer');
	}

	public function edit(){
		$id=$this->uri->segment(4);
		$data['users']=$this->project_model->get_project_master_value($id);
	    $this->load->view('admin/inc/header');
  	    $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/editproject',$data);
  	    $this->load->view('admin/inc/footer');
  	}

  	public function update(){
  		$id=$this->uri->segment(4);
  		$data = array('user_id'=>$this->input->post('user_name'),
					'job_title'=>$this->input->post('job_title'),
					'category'=>$this->input->post('category'),
					'project_expiry'=>$this->input->post('project_expiry'),
					'project_dedline'=>$this->input->post('project_dedline'),
					'project_type'=>$this->input->post('project_type'),
					'project_price'=>$this->input->post('price'),
					'project_details'=>$this->input->post('details'),
					'project_location'=>$this->input->post('location'),
					'country'=>$this->input->post('country'));

		$this->project_model->update($id,$data);
		redirect("admin/project/");



  	}
  	public function delete()
   {
      $id=$this->uri->segment(4);
      $this->project_model->delete($id);
      redirect("admin/project/");
    }


}
?>