<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notaris extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_notaris');
    }

    function index ()
    {
    	$data['Notaris'] =$this->model_notaris->tampil_data()->result();
        $this->template->load('template_admin','Notaris/data', $data);
    }
     function Tambah_aksi(){
    	$idnotaris =$this->input->post('id');
    	$nama_notaris =$this->input->post('nama');

    	$data = array(
    		
    		'nama_notaris' => $nama_notaris

    	);

    	$this->model_notaris->input_data($data);
    	redirect('admin/Notaris/index');
    }
    public function hapus ($idnotaris)
    {
    	$where = array ('idnotaris' => $idnotaris);
    	$this->model_notaris->hapus_data($where,'notaris');
    	redirect ('admin/Notaris/index');
    }
    public function edit ($where)
    {
    	$where = array ('idnotaris' => $where);
    	$data['Notaris'] = $this->model_notaris->edit_data($where,'notaris')->result();
    	$this->template->load('template_admin','Notaris/edit', $data);
    }
    public function update(){
    	$idnotaris = $this->input->post('id');
    	$nama_notaris =$this->input->post('nama');

    	$data = array (
    		'nama_notaris' => $nama_notaris,

    	);

    	$Data = array (
            'id' => $idnotaris
        );
        $this->db->update($data);
        $this->model_notaris->update('notaris',$where,$data);
        redirect('admin/Notaris/index');

        //$this->model_notaris->update($data);
        //redirect('admin/Notaris/index');
    
    }
    
}

            