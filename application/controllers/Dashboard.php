<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mdashboard');
    }

	public function index()
	{
        $data = [
            'title' => 'Home | Booking Alat Berat'
        ];
		$this->load->view('_header', $data);
        $this->load->view('pages/home');
        $this->load->view('_footer');
	}

    public function kategori(){
        $kategori = $this->Mdashboard->getkategori()->result();
        $data = [
            'title' => 'Kategori | Booking Alat Berat',
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
}
