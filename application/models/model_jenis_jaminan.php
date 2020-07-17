<?php
class model_jenis_jaminan extends CI_Model{
	public function tampil_data (){
	return $this->db->get('jenis_jaminan');
	}
    function input_data ($data){
	return $this->db->insert('jenis_jaminan', $data);
	}
	public function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('jenis_jaminan');
	}
 }
?>