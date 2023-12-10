<?php

class Tipe_device extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_security');
        
        $this->load->model('m_tipedevice');
    }

    public function index(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('type_device/list_type_device',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
         $this->db->get('sewa_barang')->result();
    }
    

    public function tambah(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('type_device/tambah_type_device',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
    }

    public function simpan (){
        $device = array('jenis_device' => $this->input->post('typedevice'),
                        'jumlah' => $this->input->post('jumlah'),);
        $datadev = $this->db->insert('sewa_barang', $device);
        if($datadev = true){
            $this->session->set_flashdata('info', "Data Device telah bertambah");
            redirect('tipe_device');
        }
    }

    public function edit($id){
        $isi['data'] = $this->m_tipedevice->edit($id);
        $this->load->view('type_device/edit_type_device',$isi);
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
        $iddevice = $this->input->post('jenisdevice');
        $mydata = array(
            'id_jenis_device' => $this->input->post('jenisdevice'),
            'jenis_device' => $this->input->post('typedevice'),
            'jumlah' => $this->input->post('jumlah'),

        );
        $myquery = $this->m_tipedevice->update($iddevice, $mydata );
        if($myquery = true){
        $this->session->set_flashdata('message','Data berhasil terupdate');
        redirect('tipe_device');
        }

    }


    public function delete($id){
        $kueridev = $this->m_tipedevice->delete($id);
        if($kueridev = true){
        $this->session->set_flashdata('messagedel','Data berhasil terhapus');
        redirect('tipe_device');
        }
    }
}

?>