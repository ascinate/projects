<?php
	class Service_model extends CI_model
	{


	   public function insert($data){
		  $query =$this->db->insert('services_list',$data);
	   }



	   public function get_service_list()
		{
			$query=$this->db->query("select * from `services_list`");
			return $query->result();
		}
		


		public function delete($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->delete('services_list'); 
		}

		public function get_service_value($id)

		{
			$query=$this->db->get_where('services_list',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('services_list',$data);
     		
		}
	}
	?>