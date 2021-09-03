<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrumenModel extends Model
{
    protected $table      = 'instrumen';
    protected $userTimestamps = true;
    protected $allowedFields = ['slug', 'kodeCategory', 'kodeInstrumen', 'namaInstrumen', 'peruntukkanInstrumen'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getInstrumen($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('kodeInstrumen', 'asc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function getInstrumenByCtg($slug = false)
    {
        if ($slug == false) {
            return $this
                ->where('slug', $slug)
                ->orderBy('kodeInstrumen', 'asc')
                ->findAll();
        }

        return $this
            ->where('slug', $slug)
            ->orderBy('kodeInstrumen', 'asc')
            ->findAll();
    }
    public function getInstrumenByID($id)
    {
        return $this
            ->where('id', $id)
            ->findAll();
    }
}
