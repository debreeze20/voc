<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Controller {
    public function getData($table){
        $data = $this->db->get($table);
        return $ndata->result_array();
    }
    public function masukan($table){
        $data = $this->db->insert($table,$data);
    }
    public function perbarui($table,$data,$where){}
        $data = $this->db->update($table,$data,$where);
        return $data;
    }
    public function hapus($table, $where){
        $data = $this->db->delete($table $where);
        return $data;
    }
}