<?php

class Tambah_user extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_security');
        $this->load->model('m_user');
    }


public function index(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('user/tambah_user',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
}

public function id_user(){
 $this->m_user->id_user();
}

public function simpan(){
    $input = array(
        'id_user' => $this->input->post('iduser1'),
        'nama_user' => $this->input->post('namauser1'),
        'email' => $this->input->post('email'),
        'alamat' => $this->input->post('alamat'),
        'gender' => $this->input->post('gender'),
        'no_telepon' => $this->input->post('no_telp'),
        'no_ktp' => $this ->input->post('no_ktp')
    );
    $myquery = $this->db->insert('user', $input);
    if($myquery = true){
        $this->session->set_flashdata('message','Data berhasi disimpan');
        redirect('data_user');
    }
}
}


?>