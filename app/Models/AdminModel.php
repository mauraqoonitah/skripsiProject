<?php

namespace App\Models;


use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'category_instrumen';
    protected $userTimestamps = true;
    protected $allowedFields = ['id', 'slug', 'namaCategory', 'kodeCategory', 'peruntukkanCategory'];
    protected $primaryKey = 'id';
    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getCategory($slug = false)
    {
        if ($slug == false) {


            // return $this
            //     ->groupBy('slug')
            //     ->orderBy('id', 'desc')
            //     ->findAll();

            // select ONLY the rows based on the same value in the column[slug]
            return $this
                ->groupBy('slug')
                // ->having('count(slug) > 1')
                ->orderBy('slug', 'asc')
                ->findAll();

            // select all rows, except its only show one rows for duplicate field
            // return $this->groupBy('slug')
            //     ->orderBy('id', 'desc')
            //     ->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function getPeruntukkan($slug = false)
    {
        if ($slug == false) {
            return $this
                ->select('peruntukkanCategory')
                ->orderBy('slug', 'asc')
                ->where('slug', $slug)
                ->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
    public function getPeruntukkanCtg($slug)
    {
        return $this
            // ->select('peruntukkanCategory')
            ->where('slug', $slug)
            ->findAll();
    }

    public function sizeSlug($slug)
    {
        return $this
            ->select('slug')
            ->where('slug', $slug)
            ->countAllResults();
    }
    public function getSelectedResponden($slug)
    {
        return $this
            ->select('category_instrumen.*')
            ->join('jenis_responden as rsp', 'category_instrumen.peruntukkanCategory = rsp.responden')
            ->where('slug', $slug)
            ->get()->getResultArray();
    }
}
