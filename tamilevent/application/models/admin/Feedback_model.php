<?php

class Feedback_model extends CI_Model
{
	public function feedback_insert($data)
	   {
		  $query =$this->db->insert('feedback_master',$data);
	   }
	   public function get_feedback_master()
	   	{
			$query=$this->db->query("select * from `feedback_master`");
			return $query->result();
		}
		 public function delete_feedback($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->delete('feedback_master'); 
		}

		public function get_feedback_value($id)

		{
			$query=$this->db->get_where('feedback_master',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('feedback_master',$data);
     		
		}
			
		
}
?>