<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_nasabah');
    }

    function index ()
    {
        $data['datanasabah'] = $this->Mod_nasabah->get_nasabah();
        $this->template->load('template_admin','nasabah/data',$data);
    }
    
    function add()
    {
        
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nama_nasabah','Nama Nasabah','required');
		$this->form_validation->set_rules('alamat','Alamat Nasabah','required');
		
		if($this->form_validation->run())     
        {   
            $datanasabah     = array(
				'nama_nasabah' => $this->input->post('nama_nasabah'),
				'alamat' => $this->input->post('alamat')
            );

            $this->Mod_nasabah->tambahNasabah($datanasabah);
            redirect('admin/nasabah');
        }
        else
        {    
            $this->template->load('template_admin','nasabah/add');
        }
    }

    function edit($idnasabah)
    {
        $data['nasabah'] = $this->Mod_nasabah->get_nasabah_id($idnasabah);
        
        if(isset($data['nasabah']['idnasabah']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama Nasabah','required');
			$this->form_validation->set_rules('alamat','Alamat Nasabah','required');
		
			if($this->form_validation->run())     
            {   
                $datanasabah     = array(
                    'nama_nasabah' => $this->input->post('nama_nasabah'),
                    'alamat'       => $this->input->post('alamat')
                );
                // $idnasabah = $this->input->post('idnasabah');
                $this->Mod_nasabah->update_nasabah($this->input->post('idnasabah',TRUE),$datanasabah);            
                redirect('admin/nasabah/index');
            }
            else
            {
                $this->template->load('template_admin','nasabah/edit',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    }
}
?>