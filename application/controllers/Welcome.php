<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		parent::__construct();
		$this->load->view('model_products');
	}

	public function product () {
		$data['product'] = $this->model_products->all();
		$this->load->view('welcome_message', $data);
	}

	public function add_to_cart($product_no) {
		$product = $this->model_product->find($product_no);
		$data = array (
			'no' => $product_no,
			'qty' => 1,
			'harga' => $product->harga,
			'nama' => $product->nama
		);
		$this->cart->insert($data);
		redict(base_url());
	}

	public function cart () {
		$this->load->view('show_cart');
	}

	public function clear_cart () {
		$this->cart->destroy();
		redirect(base_url());
	}
}
