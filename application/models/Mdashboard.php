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

    // Operator
    public function getoperator(){
        $this->db->select('o.id, k.id AS id_kat, k.nama as nama_kategori, o.nama AS nama_operator, o.no_hp');
        $this->db->join('kategori AS k', 'k.id=o.kategori_id');
        $query = $this->db->get('operator AS o');
        return $query;
    }

    public function inputop($data){
        $this->db->insert('operator', $data);
    }

    public function updateop($data, $id){
        $this->db->update('operator', $data, ['id'=>$id]);
    }

    public function delop($id){
        $this->db->where('id', $id);
        $this->db->delete('operator');
    }
    // End Operator
}