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
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->Mdashboard->updateop($data, $id);
        redirect('dashboard/operator');
    }

    public function deloperator($id){
        $this->Mdashboard->delop($id);
        redirect('dashboard/operator');
    }
    // End Operator

    // Alat Berat
    public function alatberat($id){
        $kategori = $this->Mdashboard->getkategori()->result();
        $alat = $this->Mdashboard->getalat($id)->result();
        $data = [
            'title' => 'Alat Berat | Booking Alat Berat',
            'kat' => $this->kat(),
            'kategori' => $kategori,
            'alat' => $alat
        ];
		$this->load->view('_header', $data);
        $this->load->view('pages/alatberat');
        $this->load->view('_footer');
    }

    public function alat_action(){
        $config['upload_path']          = './assets/images/alat';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 20480;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')){
            echo "Gagal upload file!!!";
        }
        else{
            $data = [
                'kategori_id' => $this->input->post('kategori_id'),
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto' => base_url('assets/images/alat/'.$_FILES['foto']['name']),
                'tahun' => $this->input->post('tahun'),
                'harga' => $this->input->post('harga'),
                'status' => '0',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            $this->Mdashboard->inputalat($data);
            redirect('dashboard/alatberat/'.$data['kategori_id']);
        }
    }

    public function alat_update(){
        $config['upload_path']          = './assets/images/alat';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 20480;
        $config['max_height']           = 76800;

        $this->load->library('upload', $config);

        $id = $this->input->post('id');
        if ( ! $this->upload->do_upload('foto')){
            $data = [
                'kategori_id' => $this->input->post('kategori_id'),
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tahun' => $this->input->post('tahun'),
                'harga' => $this->input->post('harga'),
                'status' => $this->input->post('status'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        else{
            $data = [
                'kategori_id' => $this->input->post('kategori_id'),
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'foto' => base_url('assets/images/alat/'.$_FILES['foto']['name']),
                'tahun' => $this->input->post('tahun'),
                'harga' => $this->input->post('harga'),
                'status' => $this->input->post('status'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }
        $this->Mdashboard->updatealat($data, $id);
        redirect('dashboard/alatberat/'.$data['kategori_id']);
    }

    public function delalat($id, $url){
        $this->Mdashboard->delalat($id);
        redirect('dashboard/alatberat/'.$url);
    }
}
