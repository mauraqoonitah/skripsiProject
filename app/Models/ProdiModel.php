<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table      = 'prodi';
    protected $allowedFields = ['nama_prodi'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getProdi($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'asc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
