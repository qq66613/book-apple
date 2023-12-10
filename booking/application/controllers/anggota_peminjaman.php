<?php


class Anggota_peminjaman extends CI_Controller{
    public function __construct(){
        parent ::__construct();
        $this->load->model('m_login');
        $this->load->model('m_security');
        //$this->load->model('m_user');
        $this->load->model("m_peminjaman");
    }

    public function index(){
        
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('anggota_transaksi/list_peminjaman',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        //$this->m_barang->get_data_barang();
    }

    public function tambah(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('anggota_transaksi/tambah_peminjaman',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        $this->db->get('user')->result();
        $this->db->get('namabarang')->result();
        $this->db->get('sewa_barang')->result();
        $this->m_peminjaman->idpeminjaman();
        $this->m_peminjaman->getdatapeminjaman();
    }

     public function simpan(){
        $input = array(
        'id_pm' => $this->input->post('idpeminjaman'),
        'id_user' => $this->input->post('id_user'),
        'skubarang' => $this->input->post('idbarang'),
        'tgl_pinjam' => $this->input->post('tglpinjam'),
        'tgl_kembali' => $this->input->post('tglkembali'),
        'id_jenis_device' => $this->input->post('tipe')
    );
    $myquery = $this->db->insert('peminjaman', $input);
    if($myquery = true){
        $this->session->set_flashdata('message','Data berhasi disimpan');
        redirect('anggota_peminjaman');
    }
    }

    public function jumlah_barang(){

        $id = $this->input->post('id');
        $data = $this->m_peminjaman->jumlah_barang($id);
        echo json_encode($data);
    }

    public function kembalikan($id){
        $data = $this->m_peminjaman->getDataById_pm($id);
        $kembalikan = array(
        //'id_pm' => $this->input->post('idpeminjaman'),
        'id_user' => $data['id_user'],
        'skubarang' => $data['skubarang'],
        'id_jenis_device' => $data['id_jenis_device'],
        'tgl_pinjam' => $data['tgl_pinjam'],
        'tgl_kembali' => $data['tgl_kembali'],
        'tgl_dikembalikan' => date('Y-m-d'),
        );

        $myquery = $this->db->insert('pengembalian', $kembalikan);
        if($myquery = true){
            $delete = $this->m_peminjaman->deletePm($id);
        }if($delete = true){
            $this->session->set_flashdata('info_up', 'Buku Berhasil di kembalikan');
            redirect('anggota_peminjaman');
        }

    }
}