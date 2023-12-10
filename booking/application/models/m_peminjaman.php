<?php


class M_peminjaman extends CI_Model{
    public function idpeminjaman(){
        $this->db->select('RIGHT(peminjaman.id_pm,3) as kdpinjam', FALSE);
        $this->db->order_by('id_pm','DESC');
        $this->db->limit(1);
        $kueri = $this->db->get('peminjaman');
        if($kueri->num_rows() > 0){
            $mydata = $kueri->row();
            $kodeuser = intval( $mydata->kdpinjam)+1;

        }else{
            $kodeuser = 1; 
        }
        $kodemax = str_pad($kodeuser,3,'0', STR_PAD_LEFT);
        $kodejadi = "PNJM".$kodemax;
        return $kodejadi;
    }

    public function jumlah_barang($id){
        $this->db->select('jumlah');
        $this->db->from('sewa_barang');
        $this->db->where('id_jenis_device', $id);
        return $this->db->get()->row_array();
    }

    public function getdatapeminjaman(){
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('sewa_barang' , 'peminjaman.id_jenis_device = sewa_barang.id_jenis_device');
        $this->db->join('user' , 'peminjaman.id_user = user.id_user');
        $this->db->join('namabarang' , 'peminjaman.skubarang = namabarang.skubarang');
        return $this->db->get();
    }

    public function getDataById_pm($id){
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('sewa_barang' , 'peminjaman.id_jenis_device = sewa_barang.id_jenis_device');
        $this->db->join('user' , 'peminjaman.id_user = user.id_user');
        $this->db->join('namabarang' , 'peminjaman.skubarang = namabarang.skubarang');
        $this->db->where('peminjaman.id_pm', $id);
        return $this->db->get()->row_array();
    }

    public function deletePm($id){

        $this->db->where('id_pm', $id);
        $this->db->delete('peminjaman');
    }
}