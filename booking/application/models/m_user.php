<?php

class M_user extends CI_Model{
    

    public function id_user(){
        $this->db->select('RIGHT(user.id_user,3) as kodeuser', FALSE);
        $this->db->order_by('id_user','DESC');
        $this->db->limit(1);
        $kueri = $this->db->get('user');
        if($kueri->num_rows() > 0){
            $mydata = $kueri->row();
            $kodeuser = intval( $mydata->kodeuser)+1;

        }else{
            $kodeuser = 1; 
        }
        $kodemax = str_pad($kodeuser,3,'0', STR_PAD_LEFT);
        $kodejadi = "USER".$kodemax;
        return $kodejadi;
    }

    public function edit($id){
        $this->db->where('id_user', $id);
        return $this->db->get('user')->row_array();
    }

    public function update($id_user, $mydata){
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $mydata);
    }

    public function delete($id){
        $this->db->where('id_user', $id);
        return $this->db->delete('user');
    }
}



?>