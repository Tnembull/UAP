<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'tb_barang';
    protected $allowedFields = ['slug', 'nama_barang', 'foto', 'harga_awal', 'harga_akhir', 'tgl_buka', 'tgl_tutup', 'deskripsi_barang', 'alamat','berat'];

    public function getBarang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function pesanBarang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}