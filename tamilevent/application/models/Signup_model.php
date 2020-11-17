<?php
	class Signup_model extends CI_model
	 {
	   public function user_insert($data){
		  $query =$this->db->insert('user_master',$data);
	   }

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

		
	}
	?>