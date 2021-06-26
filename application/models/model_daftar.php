<?php
    class model_daftar extends CI_Model {

        // data untuk menyimpan ke table
        public function tambah ($username, $email, $password){
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
            );
            $this->db->insert('users', $data);
        }
    } 
?>