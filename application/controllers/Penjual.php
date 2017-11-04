<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('m_penjual');
		session_start();
	}

    public function signin($username,$password){ //sigin penjual
        $signin = $this->m_penjual->signin($username);
		if(count($signin) == 1){
			if($signin[0]['level'] == 2){
				if(password_verify($password, $signin[0]['password'])){
                    $_SESSION['penjual_usersid'] = $signin[0]['id'];
					$_SESSION['penjual_username'] = $signin[0]['username'];
					return true;
				}
				else{
					return false;
				}
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
    }

    public function signup($username,$password){ //registrasi penjual
        $level = 2; //level penjual
		$password = password_hash($password, PASSWORD_DEFAULT);
		$data = [
			'username' => $username,
			'password' => $password,
			'level' => $level
		];
		return $this->m_penjual->signup($data);
    }

    public function logout(){
		session_unset();
		session_destroy();
	}

    public function index(){ //halaman utama penjual
       echo "test";
    }
    
    public function pesan(){ //halaman pesan
        $id =  $_SESSION['penjual_usersid'];
        $d['pesan'] = $this->m_penjual->pesan($id);
        // view
    }

    public function users(){ //halaman users penjual(profile)
        $id = $_SESSION['penjual_usersid'];
        $d['users'] = $this->m_penjual->usersspesifik($id);
        // view
    }

    public function update_users(){ //update users (profile)
        $gambar_users = $this->input->post('gambar_users');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $toko = $this->input->post('toko');
        $alamat = $this->input->post('alamat');

        $id = $_SESSION['penjual_usersid'];
        $data = [
            'gambar_users' => $gambar_users,
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'toko' => $toko,
            'alamat' => $alamat
        ];

        return $this->m_penjual->updateusersspesifik($data,$id);
    }

    public function tokosaya(){ // halaman toko saya
        $id = $_SESSION['penjual_usersid'];

        $d['kuliner'] = $this->m_penjual->getkuliner();
        $d['penjual_kuliner'] = $this->m_penjual->getpenjual_kuliner($id);
        // view
    }

    public function updatetokosaya(){ //update toko
        $id = $_SESSION['penjual_usersid'];
        $data = [
            'id' => '',
            'id_users' => $id,
            'id_kuliner' => $id_kuliner,
            'harga' => $harga,
            'lain' => $lain
        ];
        return $this->m_penjual->insertpenjual_kuliner($data);
    }

    // public function requestpenjual(){ // halaman request kepada andmin super

    // }


}