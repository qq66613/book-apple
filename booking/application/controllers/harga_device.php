<?php


class Harga_device extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_security');
        $this->load->model('m_hargadevice');
    }

    public function index(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('harga_device/list_harga_device',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
         $this->db->get('hargadevice')->result();

    }

    public function tambah(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('harga_device/tambah_harga_device',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
    }

    public function simpan (){
        $hargadevice['hargadev'] = $this->input->post('hargadevice');
        $datadev = $this->db->insert('hargadevice', $hargadevice);
        if($datadev = true){
            $this->session->set_flashdata('info', "Harga Device telah bertambah");
            redirect('harga_device');
        }
    }

    public function edit($id){
        $isi['data'] = $this->m_hargadevice->edit($id);
        $this->load->view('harga_device/edit_harga_device',$isi);
        if($this->session->userdata('id')){
            $user_id = $this->session->userdata('id');
            $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
            //$this->load->view('user/edit_user',$data);
            $this->m_security->securitylog();
        }else{
            redirect('user');
        }
    }

    public function update(){
        $idhargadevice = $this->input->post('idhargadevice');
        $mydataharga = array(
            'idharga' => $this->input->post('idhargadevice'),
            'hargadev' => $this->input->post('hargadevice'),

        );
        $myquery = $this->m_hargadevice->update($idhargadevice, $mydataharga );
        if($myquery = true){
        $this->session->set_flashdata('message','Data berhasil terupdate');
        redirect('harga_device');
        }

    }

    public function delete($id){
        $kueridev = $this->m_hargadevice->delete($id);
        if($kueridev = true){
        $this->session->set_flashdata('messagedel','Data berhasil terhapus');
        redirect('harga_device');
        }
    }
}