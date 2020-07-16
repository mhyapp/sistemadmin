<?php
 
class Mod_admin extends CI_Model
{

    function cek_login($post)
    {
        $this->db->select('*'); 
        $this->db->from('user');
        $this->db->where('username',$post['username1']);
        $this->db->where('password',md5($post['password1']));
        $query = $this->db->get();

        return $query;
    }
}
?>