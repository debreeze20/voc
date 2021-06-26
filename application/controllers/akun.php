<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class akun extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('modelToko');
    }

    public function index() {        
        $this->load->view('form_login'); 
    }

    public function aksi_login() {        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $dataPenunjuk = array(
            'username' => $username,
            'password' => $password,
        );

        $cek = count($this->modelToko->getData_khusus("users",$dataPenunjuk));

        if ($cek > 0) {
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect(base_url()."index.php/akun/product/");
        } else {
            redirect(base_url());
        }
    }

    public function product() {
        if ($this->session->userdata('status')=="login") {
            $dataProduct = $this->modelToko->getData("product");
        
            $data = array(
                "dataMu" => $dataProduct 
            );
            
            $this->load->view("home_dataProduk", $data);
        } else  {
            redirect(base_url());
        }
    }

    public function baca_anggota() {
        $this->load->view('form_daftar'); 
    }

    public function daftar() {
        $this->load->view('form_daftar');
    }

    public function aksi_daftar() {
        $dataInputan = array(
            'id' => $this->input->post('id'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),          
        );
        $this->modelToko->masukkan('users', $dataInputan);
        redirect(base_url(), 'refresh');
    }

    public function logout() {
        $this->session->session_destroy();
        redirect(base_url());
    }


}