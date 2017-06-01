<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('welcome_message');
		$data = $this->db->query('SELECT * FROM barang');
		foreach ($data->result_array() as $d) {
			echo " Nama Barang: ".$d['nama_barang']. "<br />";
		echo base_url();
}
	$this->load->view('List_barang');
	}

	public function insert(){
		$res = $this->Mymodel->InsertData('barang', array(
			"kode_barang"=>"1008",
			"nama_barang"=>"Kotak pensil",
			"harga"=>"2000",
			"jumlah"=>"10",
			"satuan"=>"pcs",
			"kategori"=>"ATK",
			));
		if($res>= 1){
			echo "<h2> Insert Data Sukses</h2>";
		}else{
			echo "<h2> Insert Data Gagal</h2>";
		}
	}

	public function update(){
		echo"ini function update";
	}

	public function delete (){
		echo"ini function delete";
	}
}
