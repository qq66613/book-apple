<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_security extends CI_Model {

    public function securitylog(){
        $username = $this->session->userdata('username');
        if(empty($username)){
            $this->session->sess_destroy();
            redirect('user');
        }
    }
}