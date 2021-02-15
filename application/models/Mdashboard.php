<?php

class Mdashboard extends CI_Model{
    // Kategori
    public function getkategori(){
        return $this->db->get('kategori');
    }

    public function inputkat($data){
        $this->db->insert('kategori', $data);
    }

    public function updatekat($data, $id){
        $this->db->update('kategori', $data, ['id'=>$id]);
    }

    public function delkat($id){
        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }
    // End Kategori
}