<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisRespondenModel extends Model
{
    protected $table      = 'jenis_responden';
    protected $userTimestamps = true;
    protected $allowedFields = ['responden'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getJenisResponden($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
