<?php



class Data_user extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_security');
    }

    public function index(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('user/data_user',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        
        $this->db->get('user')->result();
    }

    
}