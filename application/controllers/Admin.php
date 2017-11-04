<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index(){
		echo "admin";
	}

	public function addkuliner(){
		$kategori = $this->input->post('kategori');
		$gambar_kuliner = $this->input->post('gambar_kuliner');
		$deskripsi = $this->input->post('deskripsi');
		$nama = $this->input->post('nama');

		$data = [
			'kategori' => $kategori,
			'gambar_kuliner' => $gambar_kuliner,
			'deskripsi' => $deskripsi,
			'nama' => $nama 
		];
	}

	public function kuliner(){
		$d['kuliner'] = $this->m_admin->getkuliner();
		var_dump($d['kuliner']);
	}

	public function deletekuliner($id){
		return $this->m_admin->deletekuliner($id);
	}
}
