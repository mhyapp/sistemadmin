<?php
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_user');
        $this->load->model('Mod_level');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->Mod_user->get_all_user();
        
        $this->template->load('template_admin','user/data',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('username','Username','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
				'idleveluser' => $this->input->post('idleveluser'),
            );
            $this->Mod_user->add_user($params);
            redirect('admin/user/index');
        }
        else
        {   
            $data['level'] = $this->Mod_level->get_all_leveluser();
            $this->template->load('template_admin','user/add',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($iduser)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->Mod_user->get_user($iduser);
        
        if(isset($data['user']['iduser']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('username','Username','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'idleveluser' => $this->input->post('idleveluser'),
                );

                $this->Mod_user->update_user($iduser,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($iduser)
    {
        $user = $this->Mod_user->get_user($iduser);

        // check if the user exists before trying to delete it
        if(isset($user['iduser']))
        {
            $this->Mod_user->delete_user($iduser);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }

    
}
