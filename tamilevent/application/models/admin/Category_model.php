<?php
	class Category_model extends CI_model
	 {


	   public function insert($data){
		  $query =$this->db->insert('category_master',$data);
	   }

	   public function get_category_list()
		{
			$query=$this->db->query("select * from `category_master`");
			return $query->result();
		}
		public function delete($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->delete('category_master'); 
		}

		public function get_category_value($id)

		{
			$query=$this->db->get_where('category_master',array('id'=>$id));
			return $query->result();
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('category_master',$data);
     		
		}
	}
	?>