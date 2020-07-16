<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // Cek apakah terdapat session dengan nama authenticated
        if( ! $this->session->userdata('auth')) // Jika tidak ada
            redirect('login'); // Redirect ke halaman login
    }
}