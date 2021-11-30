<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiriJawabanModel extends Model
{
    protected $table      = 'pilihan_jawaban_data_diri';
    protected $allowedFields = ['id', 'pertanyaanID', 'pilihan'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getPilihanJawaban($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'asc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function getPilihanByPertanyaanId($pertanyaanId)
    {
        return $this
            ->where('pertanyaanID', $pertanyaanId)
            ->findAll();
    }
}
