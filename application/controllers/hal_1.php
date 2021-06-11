<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hal_1 extends CI_Controller {

	//public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->model('modelku');
		$voc =$this->modelku->getData('member-voc');
		$data = array(
			"data" =>$voc
		);
		$this->load->view("welkam_voc", $data);
	}

}
