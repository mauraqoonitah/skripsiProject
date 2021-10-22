<?php

namespace App\Models;

use CodeIgniter\Model;

class InstrumenModel extends Model
{
    protected $table      = 'instrumen';
    protected $userTimestamps = true;
    protected $allowedFields = ['slug', 'kodeCategory', 'kodeInstrumen', 'tampil_grafik', 'namaInstrumen', 'peruntukkanInstrumen'];

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

    public function joinInsdanCtg()
    {
        return $this
            ->select('
            category_instrumen.namaCategory AS nama_category, 
            category_instrumen.kodeCategory AS kode_category, 
            category_instrumen.*, 
            instrumen.namaInstrumen as nama_instrumen, 
            instrumen.kodeInstrumen as kode_instrumen, 
            instrumen.peruntukkanInstrumen as responden_instrumen, 
            instrumen.*')
            ->join('category_instrumen', 'category_instrumen.slug = instrumen.slug')
            ->orderBy('kodeInstrumen', 'asc')
            ->get()->getResultArray();
    }

    public function getInstrumenByResponden($peruntukkanInstrumen)
    {
        return $this
            ->where('peruntukkanInstrumen', $peruntukkanInstrumen)
            ->orderBy('kodeInstrumen', 'asc')
            ->findAll();
    }

    public function getInstrumenByJenisResponden($jenisResponden)
    {
        return $this
            ->where('peruntukkanInstrumen', $jenisResponden)
            ->findAll();
    }
}
