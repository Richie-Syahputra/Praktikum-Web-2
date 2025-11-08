<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model {

    // Mengambil semua data dari tabel prodi
    public function getAll()
    {
        $query = $this->db->get('prodi');
        return $query->result(); // Menggunakan result() untuk banyak baris
    }

    // Menyimpan data baru ke tabel prodi
    public function simpan($data)
    {
        return $this->db->insert('prodi', $data);
    }

    // Mengambil satu baris data berdasarkan id
    public function getById($id)
    {
        $query = $this->db->get_where('prodi', ['id_prodi' => $id]);
        return $query->row(); // Menggunakan row() untuk satu baris
    }

    // Memperbarui data di tabel prodi
    public function perbaharui($id, $data)
    {
        return $this->db->update('prodi', $data, ['id_prodi' => $id]);
    }

    // Menghapus data dari tabel prodi
    public function hapus($id)
    {
        return $this->db->delete('prodi', ['id_prodi' => $id]);
    }
}