<?php class M_admin extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function addkuliner(){
        return $this->db->insert('kuliner',$data);
    }

    public function getkuliner(){
        $query = $this->db->get('kuliner');
        return $query->result_array();
    }

    public function deletekuliner($id){
        $this->db->where('id',$id);
        return $query = $this->db->delete('kuliner');
    }

}