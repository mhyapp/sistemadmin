<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Mod_nasabah extends CI_Model
	{
        function get_nasabah()
        {
            return $this->db->get('nasabah')->result();
        }

        function tambahNasabah($datanasabah)
        {
            return $this->db->insert('nasabah', $datanasabah);
        }

        function get_nasabah_id($idnasabah)
        {
            return $this->db->get_where('nasabah',array('idnasabah'=>$idnasabah))->row_array();
        }

        function update_nasabah($idnasabah,$datanasabah)
        {
            // $idnasabah = $this->input->post('idnasabah',TRUE);
            $this->db->where('idnasabah',$idnasabah);
            return $this->db->update('nasabah',$datanasabah);
        }
    }
    
?>