<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    function index ()
    {
        $this->template->load('template_admin','dashboard_admin/main');
    }
    
}
?>