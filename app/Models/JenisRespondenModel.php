<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisRespondenModel extends Model
{
    protected $table      = 'jenis_responden';
    protected $useTimestamps = true;
    protected $allowedFields = ['responden'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getJenisResponden($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('responden', 'asc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function getJenisRespondenID($responden)
    {
        return $this
            ->select('id')
            ->where('responden', $responden)
            ->findAll();
    }
}
