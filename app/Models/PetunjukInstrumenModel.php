<?php

namespace App\Models;

use CodeIgniter\Model;

class PetunjukInstrumenModel extends Model
{
    protected $table      = 'petunjuk_instrumen';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'isiPetunjuk', 'instrumenID', 'created_at', 'updated_at'];

    public function getIsiPetunjuk($id)
    {
        return $this
            ->where('id', $id)
            ->findAll();
    }
    public function getPetunjukIns($instrumenID)
    {
        return $this
            ->where('instrumenID', $instrumenID)
            ->findAll();
    }
    public function getPetunjukID($instrumenID)
    {
        return $this
            ->select('id')
            ->where('instrumenID', $instrumenID)
            ->findAll();
    }
}
