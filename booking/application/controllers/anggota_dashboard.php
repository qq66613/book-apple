<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_dashboard extends CI_Controller{
    public function __construct(){
        parent ::__construct();
        $this->load->model('m_login');
        $this->load->model('m_security');
        $this->load->model('m_user');
    }

    public function index(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);
                     
         $data['nama'] = $user_data;
         
         $this->load->view('anggota/anggotadash' ,$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }

        $this->db->get('user')->result();
    }

    public function tambah(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('anggota/tambah_user',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
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
        redirect('anggota_dashboard');
    }

    }

    public function edit($id){
    $isi['data'] = $this->m_user->edit($id);
    $this->load->view('anggota/edit_user',$isi);
    if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         //$this->load->view('user/edit_user',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        $this->m_user->id_user();
    }

    public function update(){
        $id_user = $this->input->post('iduser1');
        $mydata = array(
            'id_user' => $this->input->post('iduser1'),
            'nama_user' => $this->input->post('namauser1'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'gender' => $this->input->post('gender'),
            'no_telepon' => $this->input->post('no_telp'),
            'no_ktp' => $this ->input->post('no_ktp')
        );
        $myquery = $this->m_user->update($id_user, $mydata );
        if($myquery = true){
        $this->session->set_flashdata('message','Data berhasil terupdate');
        redirect('anggota_dashboard');
        }
    }


    public function delete($id){
        $kueri = $this->m_user->delete($id);
        if($kueri = true){
        $this->session->set_flashdata('message','Data berhasil terhapus');
        redirect('anggota_dashboard');
        }
    }
}