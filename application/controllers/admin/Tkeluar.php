<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tkeluar extends My_controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_notaris');
        $this->load->model('Mod_nasabah');
    }

    function index ()
    {
        $data['notaris'] = $this->Model_notaris->tampil_data()->result_array();
        $data['nasbah'] = $this->Mod_nasabah->get_nasabah();

        $this->template->load('template_admin','tkeluar/form',$data);
    }

    function cari_nasabah()
    {
        $cariNasabah = $this->input->post('searchTerm');
        $tampil      = $this->mod_nasabah->nasabah_cari($searchTerm);
        echo json_encode($tampil);
    }
    
}
?>