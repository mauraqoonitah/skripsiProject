<?php

namespace App\Models;

use CodeIgniter\Model;

class RespondenModel extends Model
{
    protected $table      = 'responden';
    protected $userTimestamps = true;
    protected $allowedFields = ['userID', 'role', 'noIdentitas', 'email', 'fullname'];


    public function getRespondenList($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->groupBy('email')
                ->findAll();

            // ->groupBy('noIdentitas')
            // ->having('count(noIdentitas) > 1')
            // ->orderBy('id', 'asc')
            // ->findAll();

        }

        return $this->where(['id' => $id])->first();
    }
}
