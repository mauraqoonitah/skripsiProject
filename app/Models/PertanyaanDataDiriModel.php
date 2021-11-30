<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanDataDiriModel extends Model
{
    protected $table      = 'pertanyaan_data_diri';
    protected $allowedFields = ['id', 'pertanyaan', 'jenisRespondenID', 'uniqueId'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getPertanyaan($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'asc')
                ->findAll();
        }

        return $this->where('uniqueId', $id)->findAll();
    }
}
