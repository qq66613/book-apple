<?php


class Nama_barang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("m_login");
        $this->load->model("m_security");
        $this->load->model("m_barang");
        $this->load->helper(array('form' , 'url' ));
    }

    public function index(){
        
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('nama_barang/list_nama_barang',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        $this->m_barang->get_data_barang();
    }

     public function tambah(){
        if($this->session->userdata('id')){
         $user_id = $this->session->userdata('id');
         $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
         $this->load->view('nama_barang/tambah_nama_barang',$data);
         $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        $this->db->get('sewa_barang')->result();
        $this->db->get('hargadevice')->result();
        $this->m_barang->skubarang();
    }

    public function simpan (){
            $config['upload_path'] = './uploads/barang';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048; // 2MB max size
            $config['overwrite'] = true;
            $config['max_width']  = 1080; // batas lebar gambar dalam piksel
            $config['max_height']  = 1080;

            $this->load->library('upload', $config);
           // $this->upload->initialize($config);

            if($this->upload->do_upload('gambar')){
                $data = array('upload_data' => $this->upload->data());
                $datagambar = array(
                    'skubarang' => $this->input->post('skubarang'),
                    'id_jenis_device' => $this->input->post('id_jenis_device'),
                    'idharga' => $this->input->post('idharga'),
                    'namabarangdevice' => $this->input->post('namabarangdevice'),
                    'snbarang' => $this->input->post('sndevice'),
                    'tahun_barang' => $this->input->post('tahunbarang'),
                    'gambar' => $data['upload_data']['file_name']
                );
                //$myquery = $this->db->insert('namabarang', $datagambar);
                $this->m_barang->simpan($datagambar);
                if($datagambar = true){
                $this->session->set_flashdata('info', "Harga Device telah bertambah");
                redirect('nama_barang');
                }
            }else{
               $err = array('error' => $this->upload->display_errors());
                $this->load->view('nama_barang/tambah_nama_barang', $err);
            }
            
    }

    public function edit($id){
        $isi['data'] = $this->m_barang->edit($id);
        $this->load->view('nama_barang/edit_nama_barang',$isi);
        if($this->session->userdata('id')){
            $user_id = $this->session->userdata('id');
            $user_data = $this->m_login->get_user_data($user_id);

         $data['nama'] = $user_data;
            //$this->load->view('nama_barang/edit_nama_barang',$data);
            $this->m_security->securitylog();
        }else{
            redirect('user');
        }
        $this->db->get('sewa_barang')->result();
        $this->db->get('hargadevice')->result();
        //$this->m_barang->skubarang();
    }

    public function update(){
            
            
    $config['upload_path'] = FCPATH . '/uploads/barang';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = 2048; // 2MB max size
    $config['overwrite'] = true;
    $config['max_width'] = 1080; // batas lebar gambar dalam piksel
    $config['max_height'] = 1080;

    $this->load->library('upload', $config);

    $sku = $this->input->post('skubarang');
    
    if ($this->upload->do_upload('new_image')) {
        // Jika ada gambar baru diunggah
        $data = array('upload_data' => $this->upload->data());
        $datagambar = array(
            'skubarang' => $this->input->post('skubarang'),
            'id_jenis_device' => $this->input->post('id_jenis_device'),
            'idharga' => $this->input->post('idharga'),
            'namabarangdevice' => $this->input->post('namabarangdevice'),
            'snbarang' => $this->input->post('sndevice'),
            'tahun_barang' => $this->input->post('tahunbarang'),
            'gambar' => $data['upload_data']['file_name']
        );
    } else {
        // Jika tidak ada gambar baru diunggah
        $datagambar = array(
            'skubarang' => $this->input->post('skubarang'),
            'id_jenis_device' => $this->input->post('id_jenis_device'),
            'idharga' => $this->input->post('idharga'),
            'namabarangdevice' => $this->input->post('namabarangdevice'),
            'snbarang' => $this->input->post('sndevice'),
            'tahun_barang' => $this->input->post('tahunbarang'),
        );
        
    }
    
    $myquery = $this->m_barang->update($sku, $datagambar);

    if ($myquery= array($sku,$datagambar)) {
        $this->session->set_flashdata('info', "Harga Device telah bertambah");
        redirect('nama_barang');
    } else {
        // Handling if the update fails
        // ...
    }
        $this->load->view('nama_barang/list_nama_barang');   
        
    } 


    public function delete($sku){
        $this->load->model('m_barang');

        $result = $this->m_barang->delete($sku);


        if($result){
            $this->session->set_flashdata('info_hapus', 'Data Barang berhasil dihapus');
        }else{
            $this->session->set_flashdata('error', 'Gagal Menghapus Barang');
        }

        redirect('nama_barang');
    }
    

}