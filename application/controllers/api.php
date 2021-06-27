<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class api extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('modelToko');
        }

        public function index() {   ;
            $aksesClient = $this->input->get('kode');
            $dataPenunjuk = array(
                'auth' => $aksesClient
            );

            $cek = count($this->modelToko->getData_khusus("user_api",$dataPenunjuk));
            if ($cek > 0) {
                $dataProduct = $this->modelToko->getData("product");
        
                $data = array(
                    "dataProduct" => $dataProduct 
                );
            
                echo json_encode($data);
            } else {
                echo "Anda tidak punya akses";
            }          
        }
    }

?>