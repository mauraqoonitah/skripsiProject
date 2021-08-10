<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrumenModel extends Model
{
    protected $table      = 'instrumen';
    protected $userTimestamps = true;
    protected $allowedFields = ['kodeCategory', 'kodeInstrumen', 'namaInstrumen', 'peruntukkanInstrumen' ];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getInstrumen($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
