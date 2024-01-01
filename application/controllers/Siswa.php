<?php
class Siswa extends CI_Controller
{
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

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('layout/footer', $data);
    }
}
