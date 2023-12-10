<?php

class Pengembalian extends CI_Controller{
    public function __construct(){
        parent ::__construct();
        $this->load->model("m_login");
        $this->load->model("m_security");
        //$this->load->model("m_peminjaman");
        $this->load->model('m_pengembalian');
    }

    public function index(){
        
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('transaksi/list_pengembalian',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        //$this->m_barang->get_data_barang();
        $this->m_pengembalian->getAllData();
    }

}