<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis_jaminan extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_jenis_jaminan');
    }
    function index ()
    {
    	$data['Jenis_jaminan'] =$this->model_jenis_jaminan->tampil_data()->result();
        $this->template->load('template_admin','Jenis_jaminan/data', $data);
    }
     function tambah(){
    	$idjns_jaminan =$this->input->post('id');
    	$nama_jenis_jaminan =$this->input->post('nama');
    	$data = array('nama_jenis_jaminan' => $nama_jenis_jaminan);
    	$this->model_jenis_jaminan->input_data($data);
    	redirect('admin/Jenis_jaminan/index');
    }
    public function hapus ($idjns_jaminan)
    {
    	$where = array ('idjns_jaminan' => $idjns_jaminan);
    	$this->model_jenis_jaminan->hapus_data($where,'jenis_jaminan');
    	redirect ('admin/Jenis_jaminan/index');
    }
    
    //public function search(){
     //   $keyword = $this->
   
}

            