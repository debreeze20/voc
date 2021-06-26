<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_products extends CI_Model {

    public function all () {
        $hasil = $this->db->get('product');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function find ($no) {
        // mencari recors berdasarkan no
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