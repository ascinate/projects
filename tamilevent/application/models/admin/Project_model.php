<?php

class Project_model extends CI_Model
{
	
	public function insert($data)
	{
		$query =$this->db->insert('project_master',$data);
		
	}
	public function get_project_master(){
		$query = $this->db->get('project_master');
		return $query->result();

	}
	public function get_project_master_view($id){
		$query = $this->db->get_where('project_master',array('id'=>$id));
		return $query->result();

	}
	public function get_project_master_value($id)
		{
			$query=$this->db->get_where('project_master',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data){
			$this->db->where('id',$id);
			$this->db->update('project_master',$data);

		}

		public function delete($id){
			$this->db->where('id',$id);
			$query= $this->db->delete("project_master");
		}
}
?>