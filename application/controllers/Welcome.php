<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function fungsi() {
		$this->load->view('home_dataProduk');
	}

	public function pm($nama) {
		$data = array(
			'nama' => $nama
		);
		$this->load->view('home', $data);
	}
}
