<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelToko extends CI_Model {

    public function getData ($tabel) {
        $syai = $this->db->get($tabel);
        return $syai->result_array();
    }

    public function masukkan($tabel, $data) {
        $syai = $this->db->insert($tabel, $data);
        return $syai;
    }

    public function perbarui($tabel, $data, $where) {
        $syai = $this->db->update($tabel, $data, $where);
        return $syai;
    }

    public function hapus ($tabel, $where) {
        $syai = $this->db->delete($tabel, $where);
        return $syai;
    }

    public function getData_khusus ($tabel, $where) {
        $syai = $this->db->get_where($tabel, $where);
        return  $syai->result_array();
    }

    public function _uploadImage() {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product->no;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }
	       
}

?>