<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');
    }
    
    public function index()
	{
        $this->load->view('login');
    }

    public function proses(){
        $email=$_POST['email'];
        $pass=md5($_POST['password']);
        $query=$this->Mlogin->cek_login($email,$pass);
        $cek=$query->num_rows();
        $data = $query->row();
        if($cek>0){
            $this->session->set_userdata('user', $data);
            redirect('dashboard/index');
        }
        else{
            redirect('login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
