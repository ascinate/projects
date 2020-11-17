<?php
	class Supplier_model extends CI_model
	 {


	   
	   public function get_event_master()
		{
			$query=$this->db->query("select * from `events_list`");
			return $query->result();
		}
		public function get_service_master()
		{
			$query=$this->db->query("select * from `services_list`");
			return $query->result();
		}
		public function get_country_master()
		{
			$query=$this->db->query("select * from `country_list`");
			return $query->result();
		}
		public function get_rate_master()
		{
			$query=$this->db->query("select * from `rate_list`");
			return $query->result();
		}
		public function get_user_master()
		{
			$query=$this->db->query("select * from `user_master` where `user_type`='Business'");
			return $query->result();
		}

		public function get_supplier_profile($id)
		{
			$query=$this->db->get_where('user_master',array('id'=>$id));
			return $query->result();
		}
		
		


		
	}
	?>