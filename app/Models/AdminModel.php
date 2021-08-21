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
            return $this
                // ->groupBy('slug')
                ->orderBy('id', 'desc')
                ->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    //     public function tampilPeruntukkan()
    //     {

    //         return $this
    //             ->select('*')
    //             // ->where('slug', 'slug')
    //             ->having('slug',  2)
    //             ->orderBy('id', 'desc')
    //             ->findAll();
    //     }
}
