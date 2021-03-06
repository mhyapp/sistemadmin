<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Level extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_level');
    } 

    /*
     * Listing of leveluser
     */
    function index()
    {
        $data['leveluser'] = $this->Mod_level->get_all_leveluser();
        
        // $data['_view'] = 'leveluser/index';
        $this->template->load('template_admin','level/data',$data);
    }

    /*
     * Adding a new leveluser
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('namalevel','Namalevel','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'namalevel' => $this->input->post('namalevel'),
            );
            
            $leveluser_id = $this->Mod_level->add_leveluser($params);
            redirect('level/index');
        }
        else
        {            
            $data['_view'] = 'leveluser/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a leveluser
     */
    function edit($idleveluser)
    {   
        // check if the leveluser exists before trying to edit it
        $data['leveluser'] = $this->Mod_level->get_leveluser($idleveluser);
        
        if(isset($data['leveluser']['idleveluser']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('namalevel','Namalevel','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'namalevel' => $this->input->post('namalevel'),
                );

                $this->Mod_level->update_leveluser($idleveluser,$params);            
                redirect('level/index');
            }
            else
            {
                // $data['_view'] = 'leveluser/edit';
                // $this->load->view('layouts/main',$data);
                $this->template->load('template_admin','level/edit');
            }
        }
        else
            show_error('The leveluser you are trying to edit does not exist.');
    } 

    /*
     * Deleting leveluser
     */
    function remove($idleveluser)
    {
        $leveluser = $this->Mod_level->get_leveluser($idleveluser);

        // check if the leveluser exists before trying to delete it
        if(isset($leveluser['idleveluser']))
        {
            $this->Mod_level->delete_leveluser($idleveluser);
            redirect('level/index');
        }
        else
            show_error('The leveluser you are trying to delete does not exist.');
    }
    
}