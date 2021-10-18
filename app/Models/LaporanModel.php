<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table      = 'laporan';
    protected $useTimestamps = true;
    protected $allowedFields = ['instrumenID', 'laporanInstrumen'];

    public function getLaporanInstrumen($id = false)
    {
        if ($id == false) {
            return $this
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
