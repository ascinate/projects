<?php
	class Admin_model extends CI_model
	{



	   public function login()
	   {
		  $email = $this->input->post('email');
		  $pass = $this->input->post('password');
		  
		  $this->db->select('*');
		  $this->db->from('admin_master');
		  $this->db->where('email',$email);
		  $this->db->where('password',$pass);
	  
		  if($query=$this->db->get())
		  {
			 return $query->result_array();
		  }

		  else
		  {
			return false;
		  }
		 
	   }

}
?>