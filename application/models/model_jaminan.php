<?php
class model_jaminan extends CI_Model{
    public function tampil_data (){
    return $this->db->get('jaminan');
    }
    function input_data ($data){
    return $this->db->insert('jaminan', $data);
    }
    
 }
?>