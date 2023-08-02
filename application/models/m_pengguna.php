<?php

class M_pengguna extends CI_Model
{   
    public function daftar_pengguna(){
        $datapetugas = $this->db->get('user');
        return $datapetugas->result();
    }
}