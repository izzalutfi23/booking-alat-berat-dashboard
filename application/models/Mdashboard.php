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

    // Alat Berat
    public function getalat($id){
        $this->db->select('k.id AS id_kat, k.nama AS nama_kategori, a.id, a.nama AS nama_alat, a.deskripsi, a.foto, a.tahun, a.harga, a.status');
        $this->db->where('k.id', $id);
        $this->db->join('kategori AS k', 'k.id = a.kategori_id');
        $query = $this->db->get('alatberat AS a');
        return $query;
    }

    public function inputalat($data){
        $this->db->insert('alatberat', $data);
    }

    public function updatealat($data, $id){
        $this->db->update('alatberat', $data, ['id'=>$id]);
    }

    public function delalat($id){
        $this->db->where('id', $id);
        $this->db->delete('alatberat');
    }
    // End Alat Berat

    // Transaksi
    public function gettrx($status){
        $this->db->select('t.id, a.nama AS nama_alat, t.status, t.start_date, t.end_date, t.nama_penyewa, 
        t.alamat_proyek, t.total');
        $this->db->where('t.status', $status);
        $this->db->join('alatberat as a', 'a.id=t.alatberat_id');
        $query = $this->db->get('transaksi AS t');
        return $query;
    }
}