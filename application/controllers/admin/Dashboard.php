<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
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