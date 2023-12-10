<?php


class Edit_user extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_security');
        $this->load->model('m_user');
    }

   // public function index(){
        // if($this->session->userdata('id')){
        //  $user_id = $this->session->userdata('id');
        //  $user_data = $this->m_login->get_user_data($user_id);

        //  $data['nama'] = $user_data;
        //  $this->load->view('user/edit_user',$data);
        //  $this->m_security->securitylog();
        // }else{
            // // redirect('user');
        // }

        
   // }

    public function id_user(){
      $this->m_user->id_user();
    }

    public function edit($id){
    $isi['data'] = $this->m_user->edit($id);
    $this->load->view('user/edit_user',$isi);
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
        redirect('data_user');
        }
    }

    public function delete($id){
        $kueri = $this->m_user->delete($id);
        if($kueri = true){
        $this->session->set_flashdata('message','Data berhasil terhapus');
        redirect('data_user');
        }
    }

}



?>