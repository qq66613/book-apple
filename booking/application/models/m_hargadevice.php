<?php 


class M_hargadevice extends CI_Model{
    public function edit($id){
        $this->db->where('idharga', $id);
        return $this->db->get('hargadevice')->row_array();
    }

    public function update($idhargadevice, $mydataharga){
        $this->db->where('idharga', $idhargadevice);
        $this->db->update('hargadevice', $mydataharga);
    }

    public function delete($id){
        $this->db->where('idharga', $id);
        return $this->db->delete('hargadevice');
    }

}