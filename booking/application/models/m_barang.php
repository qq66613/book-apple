<?php 


class M_barang extends CI_Model{
    public function skubarang(){
        $this->db->select('RIGHT(namabarang.skubarang,3) as kdbarang', FALSE);
        $this->db->order_by('skubarang','DESC');
        $this->db->limit(1);
        $kueri = $this->db->get('namabarang');
        if($kueri->num_rows() > 0){
            $mydata = $kueri->row();
            $kodeuser = intval( $mydata->kdbarang)+1;

        }else{
            $kodeuser = 1; 
        }
        $kodemax = str_pad($kodeuser,3,'0', STR_PAD_LEFT);
        $kodejadi = "SKU".$kodemax;
        return $kodejadi;
    }

    public function simpan($data) {
        $this->db->insert('namabarang', $data);
    }

    public function get_data_barang(){
        $this->db->select('*');
        $this->db->from('namabarang');
        $this->db->join('sewa_barang' , 'namabarang.id_jenis_device = sewa_barang.id_jenis_device');
        $this->db->join('hargadevice' , 'namabarang.idharga = hargadevice.idharga');
        return $this->db->get();
    }

    public function edit($id){
        $this->db->select('*');
        $this->db->from('namabarang');
        $this->db->join('sewa_barang' , 'namabarang.id_jenis_device = sewa_barang.id_jenis_device');
        $this->db->join('hargadevice' , 'namabarang.idharga = hargadevice.idharga');
        $this->db->where('namabarang.skubarang', $id);
        return $this->db->get()->row_array(); 
    }

    public function update($sku, $datagambar){
        $this->db->where('skubarang', $sku);
        $this->db->update('namabarang', $datagambar);
    }

    public function delete($sku){
        $gambar = $this->get_gambar_by_sku($sku);

        $this->db->where('skubarang', $sku);
        $this->db->delete('namabarang');

        if ($gambar) {
            $gambar_path = FCPATH . '/uploads/barang/' . $gambar;
            if (file_exists($gambar_path)) {
                unlink($gambar_path);
            }
        }

        return true;

        
    }

    private function get_gambar_by_sku($sku) {
        $this->db->select('gambar');
        $this->db->where('skubarang', $sku);
        $query = $this->db->get('namabarang');

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->gambar;
        }

        return null;
    }
}