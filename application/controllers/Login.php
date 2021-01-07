<?php

class Login extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_kayu_online');
 
    }
 
    function index(){
        $this->load->view('admin/login');
    }
 
    function aksi_login(){
        $username = $this->input->post('userInput');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $this->dataencryption->enc_dec("encrypt", $password),
            'role' => 'admin',
            'status' => 'active'
            );
        $cek = $this->m_kayu_online->cek_login("users",$where)->num_rows();
        $getUser = $this->m_kayu_online->getUserData("users",$where)->result_array();

        foreach ($getUser as $key):
            $idUser = $key['id'];
            $namaUser = $key['nama'];
        endforeach;
        
        if($cek > 0){
            $data_session = array(
                'idUser' => $idUser,
                'namaUser' => $namaUser,
                'status' => "login",
                'role' => 'admin',
                'logged_in' => TRUE
                );
            // session_start();
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("admin"));
 
        }else{
           $this->session->set_flashdata('msg', array('class' => 'danger', 'message'=> 'Login Gagal, Silahkan Coba Lagi'));
            redirect(base_url("login"));

        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}