<?php

namespace App\Models;

use CodeIgniter\Model;

class PernyataanModel extends Model
{
    protected $table      = 'questions';
    protected $allowedFields = ['kodeCategory', 'instrumenID', 'namaInstrumen', 'butir', 'slug', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

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
    public function jumlahPernyataanByInstrumenID($id)
    {
        return $this
            ->select('butir')
            ->where('instrumenID', $id)
            // ->findAll();
            ->countAllResults();
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
