<?php
	class Business_model extends CI_model
	{


	   public function insert_business($data){
		  $query =$this->db->insert('user_master',$data);
	   }
	 
	   public function get_business_list()
		{
			$query=$this->db->query("select * from `user_master` where `user_type`='Business'");
			return $query->result();
		}
		public function delete($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->delete('user_master'); 
		}

		public function get_user_value($id)

		{
			$query=$this->db->get_where('user_master',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('user_master',$data);
     		
		}
	}
	?>