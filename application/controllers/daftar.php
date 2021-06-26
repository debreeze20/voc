<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class daftar extends CI_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->model('model_daftar');
        }

        public function index() {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->model_daftar->tambah($username, $email, $password);
            redirect('daftar/member');
        }

        public function member() {
            $this->load->view('form_daftar');
        }

        public function tambah() {
            $this->load->view('form_login');
        }
    }
?>