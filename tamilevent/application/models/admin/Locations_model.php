<?php

class  Locations_model extends CI_Model
{
	
	public function insert($data)
	{
		$query= $this->db->insert('locations_list',$data);
	}
	public function get_location_list(){
		$query=$this->db->query("select * from `locations_list`");
		return $query->result();
	}
	 public function delete_location($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->delete('locations_list'); 
		}

		public function get_location_value($id)

		{
			$query=$this->db->get_where('locations_list',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('locations_list',$data);
     		
		}
}
?>