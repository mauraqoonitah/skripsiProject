<?php

namespace App\Models;

use CodeIgniter\Model;

class PernyataanModel extends Model
{
    protected $table      = 'questions';
    protected $userTimestamps = true;
    protected $allowedFields = ['kodeCategory', 'instrumenID', 'namaInstrumen', 'butir', 'slug'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getPernyataan($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function getPernyataanByInstrumenID($id)
    {
        return $this
            ->where('instrumenID', $id)
            ->findAll();
    }
    public function getButirByInstrumenID($instrumenID)
    {
        return $this
            ->join('instrumen', 'instrumen.id = questions.instrumenID')
            ->select('*, questions.id as questionID')
            ->where('questions.instrumenID', $instrumenID)
            ->findAll();
    }
}
