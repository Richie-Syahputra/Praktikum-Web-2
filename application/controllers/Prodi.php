<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model
        $this->load->model('Prodi_model');
        // Load helper
        $this->load->helper('url');
    }

    // Read: Menampilkan semua data prodi
    public function index()
    {
        $data['prodi'] = $this->Prodi_model->getAll();
        $this->load->view('prodi_index', $data);
    }

    // Create: Menampilkan form tambah data
    public function tambah()
    {
        $this->load->view('prodi_tambah');
    }

    // Create: Menyimpan data baru
    public function simpan()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->simpan($data);
        redirect('prodi');
    }

    // Update: Menampilkan form edit data
    public function edit($id)
    {
        $data['prodi'] = $this->Prodi_model->getById($id);
        $this->load->view('prodi_edit', $data);
    }

    // Update: Memperbarui data
    public function perbaharui($id)
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->perbaharui($id, $data);
        redirect('prodi');
    }

    // Delete: Menghapus data
    public function hapus($id)
    {
        $this->Prodi_model->hapus($id);
        redirect('prodi');
    }
}