<?php
	class Event_master_model extends CI_model
	 {


	   public function insert($data){
		  $query =$this->db->insert('event_master',$data);
	   }

	   public function get_event_master_list()
		{
			$query=$this->db->query("select * from `event_master`");
			return $query->result();
		}
		public function delete($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->delete('event_master'); 
		}

		public function get_event_master_value($id)

		{
			$query=$this->db->get_where('event_master',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('event_master',$data);
     		
		}
	}
	?>