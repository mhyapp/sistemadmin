<?php

class model_notaris extends CI_Model{
	public function tampil_data ()
	{
		return $this->db->get('notaris');
	}

     function input_data ($data)
	{
		return $this->db->insert('notaris', $data);
			}
	public function hapus_data($where){
		$this->db->where($where);
		
		$this->db->delete('notaris');
	}
	function edit_data ($where){
		return $this->db->get_where('notaris',$where);
	}
	function update ($where,$data){
			$this->db->where($where);
			$this->db->update($data);
			$this->db->insert('idnotaris', $data);
			
	}

 }
 ?>