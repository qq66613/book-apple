<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_login extends CI_Model{

    public function user_login($pass,$user,$role){
        
        $password = md5($pass);
        
        $this->db->where("username" , $user);
        $this->db->where("password" , $password);
        $this->db->where("level" , $role);
        $query = $this->db->get("login");
        //$this->db->where('username', $user);
        
        
        if($query->num_rows() > 0){
            return $query->row_array();
            
           
                             //$this->session->set_userdata($sess);
            
            //redirect('User_dashboard');
            //redirect('anggota_dashboard');
                    
        }else{
            return false;
            //redirect('user');
            //$this->session->set_flashdata('info','<div class="alert alert-danger role="alert">Maaf Login Tidak Berhasil,
            //Periksa Kembali Username dan Password Pastikan Benar</div>');
            //redirect('user');
        }
        //$this->session->set_userdata('username', $user);
    }

    public function get_user_data($id){
      $this->db->where('nama', $id);
      
        return $this->db->get('login')->row();
    }

    public function get_level_data($level){
      $this->db->where('level', $level);
      
        return $this->db->get('login')->row();
    }
}