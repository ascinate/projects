<?php

class Milestone_model extends CI_Model
{
	
	public function insert($data)
	{
		$this->db->insert("milestones_master",$data);
	}
	public function get()
	{
		$query=$this->db->query("select * from milestones_master");
		return $query->result(); 
	}
	public function delete($id){
		$this->db->where('id',$id);
		$query= $this->db->delete("milestones_master");
	}
	public function edit($id){
		$query= $this->db->get_where('milestones_master',array('id'=>$id));
		return $query->result();

	}
	public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('milestones_master',$data);
     		
		}
}
?>