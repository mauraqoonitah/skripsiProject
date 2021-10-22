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

        return $this
            ->where('instrumenID', $id)
            ->findAll();
    }

    public function joinLaporanWithInstrumen($id)
    {
        return $this
            ->join('instrumen', 'instrumen.id = laporan.instrumenID')
            ->select('*, laporan.id as laporanID')
            ->where('laporan.id', $id)
            ->findAll();
    }

    // =============== analisis =====================
    public function getLaporanAnalisis($id = false)
    {
        if ($id == false) {
            return $this
                ->where('instrumenID', null)
                ->findAll();
        }
        return $this
            ->where('id', $id)
            ->findAll();
    }
}
