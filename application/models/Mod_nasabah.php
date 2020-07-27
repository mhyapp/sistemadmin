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

        function nasabah_cari($searchTerm="")
        {
            $this->db->select('*');
            $this->db->where("name like '%".$searchTerm."%' ");
            $tampil_record = $this->db->get('nasabah');
            $nasabah = $tampil_record->result_array();

            $data = array();
            foreach ($nasabah as $nsb) {
                $data[] = array(
                        "idnasabah"=>$nsb['idnasabah'],
                        "nama_nasabah"     =>$nsb['nama_nasabah']
                );
                return $data;
            }
            
            
            
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