<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tkeluar extends My_controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    function index ()
    {
        $this->template->load('template_admin','tkeluar/form');
    }
    
}
?>