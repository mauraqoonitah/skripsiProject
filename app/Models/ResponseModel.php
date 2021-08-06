<?php

namespace App\Models;

use CodeIgniter\Model;

class ResponseModel extends Model
{
    protected $table      = 'survey';
    protected $userTimestamps = true;
    // protected $allowedFields = ['responden'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getResponse($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
