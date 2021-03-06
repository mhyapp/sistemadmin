<?php
 
class Mod_user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by iduser
     */
    function get_user($iduser)
    {
        return $this->db->get_where('user',array('iduser'=>$iduser))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->order_by('iduser', 'desc');
        return $this->db->get('user')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        // return $this->db->insert_id();
        
    }
    
    /*
     * function to update user
     */
    function update_user($iduser,$params)
    {
        $this->db->where('iduser',$iduser);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($iduser)
    {
        return $this->db->delete('user',array('iduser'=>$iduser));
    }
}
