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
	       
}

?>