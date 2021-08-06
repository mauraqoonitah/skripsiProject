<?php

namespace App\Models;

use CodeIgniter\Model;

class PernyataanModel extends Model
{
    protected $table      = 'questions';
    protected $userTimestamps = true;
    protected $allowedFields = ['pernyataan'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getPernyataan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
