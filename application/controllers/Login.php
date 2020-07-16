<?php
 
class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mod_admin');
        
    }

    function index()
    {
        
        $this->load->view('login');
        
    }

    function auth()
    {
        $post = $this->input->post(null, TRUE);
            if (isset($post['login'])) {

                $query = $this->Mod_admin->cek_login($post);
                
                if ($query->num_rows() > 0) {
                    // echo "login berhasil";
                    // var_dump($query)
                    // $row=$query->row();
                    foreach ($query->result() as $cek ) {
                        
                        if ($cek->idleveluser == "1") {
                            
                            $sess = array ( 'auth'          =>true,
                                            'idleveluser'   =>$cek->idleveluser,
                                           'username'       =>$cek->username,
                                           'iduser'         =>$cek->idakun,
                                           'nama_lengkap'   =>$cek->nama_lengkap
                            );

                            $this->session->set_userdata($sess);
                            redirect('admin/dashboard');
                            // var_dump($sess);

                        }if ($cek->idleveluser == "2") {

                            $sess = array ('auth'           =>true,
                                            'idleveluser'   =>$cek->idleveluser,
                                           'username'       =>$cek->username,
                                           'idakun'         =>$cek->idakun,
                                           'nama_lengkap'   =>$cek->nama_lengkap
                            );
                            $this->session->set_userdata($sess);
                            // echo "<pre>";
                            // print_r($this->session->userdata());
                            // exit();
                            redirect('admin/dashboard');
                        }
                    }
                    
                }else{
                    // echo "login gagal";
                    $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Username dan Password salah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('login');
                }
            }
    }

    function logout()
    {
        // $this->session->unset_userdata(array('username'=>''));
        $this->session->sess_destroy();
        redirect(base_url("login"));
    }
}
?>