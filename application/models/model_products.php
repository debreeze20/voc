<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_products extends CI_Model {

    // mengambil data dari table product
    public function all() {
        $hasil = $this->db->get('product');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }
    
    // mencari query dari table
    public function find($id) {
        $hasil = $this->db->where('no', $no)
                          ->limit(1)
                          ->get('product');
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }    
}