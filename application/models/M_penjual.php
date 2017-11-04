<?php 

class M_penjual extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function signin($username){
        $this->db->where('username', $username);
        $query = $this->db->get('users',2);
        return $query->result_array();
    }

    public function signup($data){ //daftar
        return $this->db->insert('users',$data);
    }

    public function pesan($id){
        $this->db->where('users_penjual',$id);
        $query = $this->db->get('pesan');
        return $query->result_array();
    }

    public function users($id){
        $this->db->where('id',$id);
        $query = $this->db->get('users',1);
        return $query->row_array();
    }

    public function usersspesifik($id){
        $this->db->where('id_users',$id);
        $query = $this->db->get('users_spesifik',1);
        return $query->row_array();
    }

    public function updateusersspesifik($data,$id){
        $this->db->where('id',$id);
        $this->db->set($data);
        return $this->db->insert('users_spesifik');
    }

    public function getkuliner(){
        $query = $this->db->get('kuliner');
        return $query->result_query();
    }

    public function getpenjual_kuliner($id){
        $this->db->where('id_users',$id);
        $query = $this->db->get('penjual_kuliner');
        return $query->result_array;
    }

    public function insertpenjual_kuliner($data){
        return $this->db->insert('penjual_kuliner',$data);
    }

    // public function requestkuliner(){

    // }
}