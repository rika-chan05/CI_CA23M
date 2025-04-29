<?php
defined('BASEPATH')OR exit('No Direct script access allowed');

class dosen_model extends CI_model{
    public function get_all_dosen(){
    return $this->db->get('dosen')->result_array();
    }
    public function insert_dosen($data){
        return $this->db->insert('dosen',$data);
    }
    public function delete_dosen($iddosen){
        return $this->db->delete('dosen',['iddosen'=>$iddosen]);
    }
    public function get_dosen_by_id($iddosen){
        return $this->db->get_where('dosen',['iddosen'=>$iddosen])->row_array();
    }
    public function update_dosen($id, $data){
        $this->db->where('iddosen',$id);
        return $this->db->update('dosen',$data);
    }
}
?>