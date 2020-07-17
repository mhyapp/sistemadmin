<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jaminan extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_jaminan');
    }
    function index ()
    {
        $data['Jaminan'] =$this->model_jaminan->tampil_data()->result();
        $this->template->load('template_admin','Jaminan/data', $data);
    }
     
   
}

            