<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('modelToko');

        if ($this->session->userdata('status') !== "login") {
            redirect(base_url());
        } 
    }

    public function index() {   
        $dataProduct = $this->modelToko->getData("product");
    
        $data = array(
            "dataMu" => $dataProduct 
        );
        
        $this->load->view("home_dataProduk", $data);
    }

    public function product() {
        if ($this->session->userdata('status') == "login") {
            $dataProduct = $this->modelToko->getData("product");
        
            $data = array(
                "dataMu" => $dataProduct 
            );
            
            $this->load->view("home_dataProduk", $data);
        } else  {
            redirect(base_url());
        }
    }

    public function baca_form() {
        $this->load->view('form_tambah'); 
    }
	
	// array untuk membuat data produk
    public function tambah_produk() {
        $dataInputan = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'gambar' => $this->input->post('gambar'),
        );

        $this->modelToko->masukkan('product', $dataInputan);
        redirect(base_url()."index.php/admin/");
    }

    public function hapus_data($penunjuk) {
        $dataPenunjuk = array(
            'no' => $penunjuk        
        );

        $this->modelToko->hapus('product', $dataPenunjuk);
        redirect(base_url()."index.php/admin/");
    }

    public function ambil_DataWhere ($penunjuk) {
        $dataPenunjuk = array(
            'no' => $penunjuk
        );

        $dataProduct = $this->modelToko->getData_khusus("product", $dataPenunjuk);
        $data = array(
            "dataMu" => $dataProduct 
        );
        
        $this->load->view("form_edit", $data);
    }

    public function update_data() {
        $dataInputan = array(
            'nama' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'gambar' => $this->input->post('gambar'),
        );

        $dataPenunjuk = array(
            'no' => $this->input->post('no')        
        );

        $dataProduct = $this->modelToko->perbarui("product", $dataInputan, $dataPenunjuk);
        redirect(base_url()."index.php/admin/");
    }




}