<?php

class M_tipedevice extends CI_Model{

public function edit($id){
        $this->db->where('id_jenis_device', $id);
        return $this->db->get('sewa_barang')->row_array();
    }

public function update($iddevice, $mydata){
        $this->db->where('id_jenis_device', $iddevice);
        $this->db->update('sewa_barang', $mydata);
    }

public function delete($id){
        $this->db->where('id_jenis_device', $id);
        return $this->db->delete('sewa_barang');
    }

}