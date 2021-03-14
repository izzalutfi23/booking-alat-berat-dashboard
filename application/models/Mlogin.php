<?php
    class Mlogin extends CI_Model{

        public function cek_login($email, $pass){
            return $this->db->get_where('user', array('email'=>$email, 'password'=>$pass));
        }

    }
?>