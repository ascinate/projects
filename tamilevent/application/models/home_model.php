<?php
	class Home_model extends CI_model
	 {


	   
	   public function get_category_list()
		{
			$query=$this->db->query("select * from `category_master`");
			return $query->result();
		}
		public function get_supplier_master()
	   	{
			$query=$this->db->query("select * from `user_master` where `user_type`='Business'");
			return $query->result();
		}
		


		
	}
	?>