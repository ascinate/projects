<?php
	class Event_model extends CI_model
	{


	   public function insert($data){
		  $query =$this->db->insert('events_list',$data);
	   }



	   public function get_event_list()
		{
			$query=$this->db->query("select * from `events_list`");
			return $query->result();
		}
		


		public function delete($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->delete('events_list'); 
		}

		public function get_event_value($id)

		{
			$query=$this->db->get_where('events_list',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('events_list',$data);
     		
		}
	}
	?>