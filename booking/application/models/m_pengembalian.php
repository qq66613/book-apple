<?php

class M_pengembalian extends CI_Model{
    
    
    
    public function getAllData(){
        $this->db->select('*');
        $this->db->from('pengembalian');
        $this->db->join('sewa_barang' , 'pengembalian.id_jenis_device = sewa_barang.id_jenis_device');
        $this->db->join('user' , 'pengembalian.id_user = user.id_user');
        $this->db->join('namabarang' , 'pengembalian.skubarang = namabarang.skubarang');
        return $this->db->get();
    } 
}