<?php 

class Kuliner extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function signin($username){ //masuk
        $this->db->where('username', $username);
        $query = $this->db->get('users',2);
        return $query->result_array();
    }

    public function signup($data){ //daftar
        return $this->db->insert('users',$data);
    }

    public function users($id){ //mengambil data users
        $this->db->where('id',$id);
        $query = $this->db->get('users',1);
        return $query->row_array();
    }

    public function getkuliner($kategori){ //mengambil data kuliner limit 10

        $this->db->where('kategori',$kategori);
        $query = $this->db->get('kuliner',10);
        return $query->result_array();   
    }

    public function getkulinerbyid($id){ //mengambil kuliner dengan id
        $this->db->where('id',$id);
        $query = $this->db->get('kuliner',1);
        return $query->row_array();   
    }

    public function getcomentkuliner($id){ // mengambil komentar berdasarkan id kuliner
        $this->db->where('id_kuliner',$id);
        $query = $this->db->get('komentar');
        return $query->result_array();   
    }

    public function getpenjualkuliner($id){ // mengambil penjual berdasarkan id kuliner
        $this->db->where('id_kuliner',$id);
        $query = $this->db->get('penjual_kuliner');
        return $query->result_array();
    }

    public function getrowskuliner($kuliner){ // mendapatkan jumlah kuliner makanan/minuman
        $this->db->where('kategori',$kuliner);
        $this->db->from('kuliner');
        return $this->db->count_all_results();
    }

    public function getkulinerlimit($kuliner,$limit,$start){ // menampilkan makanan / minuman berdasarkan limit
        $this->db->where('kategori',$kuliner);
        $query = $this->db->get('kuliner',$limit,$start);
        return $query->result_array();
    }

    public function insertkomentar($data){ // memasukan komentar
        return $this->db->insert('komentar',$data);
    }

    public function deletekomentar(){

    }
}

?>