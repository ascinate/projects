<?php

class Supplier_model extends CI_Model
{
	public function supplier_insert($data)
	   {
		  $query =$this->db->insert('supplier_portfolio',$data);
	   }
	   public function get_supplier_master()
	   	{
			$query=$this->db->query("select * from `supplier_portfolio`");
			return $query->result();
		}
		public function get_supplier_value($id)

		{
			$query=$this->db->get_where('supplier_portfolio',array('id'=>$id));
			return $query->result();
		}
		 public function delete_supplier($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->delete('supplier_portfolio'); 
		}
		public function update($id,$data)
		{
			$this->db->where('id',$id);
			$this->db->update('supplier_portfolio',$data);
     		
		}

}
?>
