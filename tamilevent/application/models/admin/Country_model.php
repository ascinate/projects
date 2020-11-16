<?php

class  Country_model extends CI_Model
{
	
	public function insert($data)
	{
		$query= $this->db->insert('country_list',$data);
	}
	public function get_country_list(){
		$query=$this->db->query("select * from `country_list`");
		return $query->result();
	}
	 public function delete_country($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->delete('country_list'); 
		}

		public function get_country_value($id)

		{
			$query=$this->db->get_where('country_list',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('country_list',$data);
     		
		}
}
?>