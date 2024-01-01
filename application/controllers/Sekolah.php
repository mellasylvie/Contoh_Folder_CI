<?php

/**
 * @property Penjualan_model $Penjualan_model
 */
class Sekolah extends CI_Controller
{
    //load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model');
    }

    public function index()
    {
        $data['nama'] = 'Jono';
        $data['title'] = 'Siswa';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function guru()
    {
        $data['nama'] = 'Jono';
        $data['title'] = 'Guru';
        $data['barang'] = $this->Penjualan_model->ambil_barang();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('layout/footer', $data);
    }
    public function TU()
    {
        $data['nama'] = 'Jono';
        $data['title'] = 'Tata Usaha';

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('tu/index', $data);
        $this->load->view('layout/footer', $data);
    }
}
