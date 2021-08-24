<?php

namespace App\Models;


use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'category_instrumen';
    protected $userTimestamps = true;
    protected $allowedFields = ['slug', 'namaCategory', 'kodeCategory', 'peruntukkanCategory'];

    //kalo ada parameternya, cari yg pake where tadi
    // kalo gaada, ambil ssemua data kategori

    public function getCategory($slug = false)
    {
        if ($slug == false) {

            // I GIVE UP !!!!!

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
    public function getPeruntuk($slug = false)
    {
        if ($slug == false) {
            return $this
                ->groupBy('slug')
                ->having('slug', $slug)
                ->orderBy('slug', 'asc')
                ->findAll();

            // return $this
            //     ->groupBy('slug')
            //     ->orderBy('id', 'desc')
            //     ->findAll();

            // select ONLY the rows based on the same value in the column[slug]
            // return $this
            //     ->orderBy('slug', 'asc')
            //     ->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
