<?php

class  Rates_model extends CI_Model
{
	
	public function insert($data)
	{
		$query= $this->db->insert('rate_list',$data);
	}
	public function get_rate_list(){
		$query=$this->db->query("select * from `rate_list`");
		return $query->result();
	}
	 public function delete_rate($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->delete('rate_list'); 
		}

		public function get_rate_value($id)

		{
			$query=$this->db->get_where('rate_list',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('rate_list',$data);
     		
		}
}
?>