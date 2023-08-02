<?php

class M_dataassets extends CI_Model
{   
    public function daftar_assets(){
        $query = "SELECT `assets`.*,
        `tkategori`.`nama_kategori`,
        `tkategori`.`kode_kategori`
        FROM `tkategori`
        INNER JOIN `assets` ON `tkategori`.`id_kategori` = `assets`.`kategori`";

        $data_assets = $this->db->query($query);
        return $data_assets->result();
    }

    public function Lihat($id_assets){
        $this->db->where('id_assets', $id_assets);
        return $this->db->get('assets')->row();
    }
}