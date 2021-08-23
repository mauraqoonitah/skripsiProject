<?php

namespace App\Models;

use CodeIgniter\Model;

class RespondenModel extends Model
{
    protected $table      = 'responden';
    protected $userTimestamps = true;
    protected $allowedFields = ['nama'];


    public function getResponden($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
