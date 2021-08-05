<?php

namespace App\Models;

use CodeIgniter\Model;

class RespondenModel extends Model
{
    protected $table      = 'jenis_responden';
    protected $userTimestamps = true;
    protected $allowedFields = ['responden'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getResponden($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
