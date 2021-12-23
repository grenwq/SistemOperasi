<?php

namespace App\Models;

use CodeIgniter\Model;

class KontenModel extends Model
{
    protected $table = 'konten';
    protected $useTimestamps = true;
    protected $allowedFields =['judul', 'slug', 'deskripsi','deskripsi_lanjut', 'gambar'];


    public function getKonten($slug = false)
    {
        if($slug == false){
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

}