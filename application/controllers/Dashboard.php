<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mdashboard');
    }

    function kat(){
        return $this->Mdashboard->getkategori()->result();
    }

	public function index()
	{
        $data = [
            'title' => 'Home | Booking Alat Berat',
            'kat' => $this->kat()
        ];
		$this->load->view('_header', $data);
        $this->load->view('pages/home');
        $this->load->view('_footer');
	}

    // Kategori
    public function kategori(){
        $kategori = $this->Mdashboard->getkategori()->result();
        $data = [
            'title' => 'Kategori | Booking Alat Berat',
            'kat' => $this->kat(),
            'kategori' => $kategori
        ];
		$this->load->view('_header', $data);
        $this->load->view('pages/kategori');
        $this->load->view('_footer');
    }

    public function kategori_action(){
        $data = [
            'nama' => $this->input->post('nama'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->Mdashboard->inputkat($data);
        redirect('dashboard/kategori');
    }

    public function kategori_update(){
        $id = $this->input->post('id');
        $data = [
            'nama' => $this->input->post('nama'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->Mdashboard->updatekat($data, $id);
        redirect('dashboard/kategori');
    }

    public function delkategori($id){
        $this->Mdashboard->delkat($id);
        redirect('dashboard/kategori');
    }
    // End Kategori

    // Operator
    public function operator(){
        $kategori = $this->Mdashboard->getkategori()->result();
        $operator = $this->Mdashboard->getoperator()->result();
        $data = [
            'title' => 'Operator | Booking Alat Berat',
            'kat' => $this->kat(),
            'kategori' => $kategori,
            'operator' => $operator
        ];
		$this->load->view('_header', $data);
        $this->load->view('pages/operator');
        $this->load->view('_footer');
    }

    public function operator_action(){
        $data = [
            'kategori_id' => $this->input->post('kategori_id'),
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->Mdashboard->inputop($data);
        redirect('dashboard/operator');
    }

    public function operator_update(){
        $id = $this->input->post('id');
        $data = [
            'kategori_id' => $this->input->post('kategori_id'),
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->Mdashboard->updateop($data, $id);
        redirect('dashboard/operator');
    }

    public function deloperator($id){
        $this->Mdashboard->delop($id);
        redirect('dashboard/operator');
    }
}
