<?php

namespace App\Models;

use CodeIgniter\Model;

class RespondenModel extends Model
{
    protected $table      = 'responden';
    protected $useTimestamps = true;
    protected $allowedFields = ['userID', 'role', 'fullname'];


    public function getRespondenList($id = false)
    {
        if ($id == false) {
            return $this
                ->orderBy('id', 'desc')
                ->groupBy('userID')
                ->findAll();

            // ->groupBy('noIdentitas')
            // ->having('count(noIdentitas) > 1')
            // ->orderBy('id', 'asc')
            // ->findAll();

        }

        return $this->where(['id' => $id])->first();
    }

    public function getUser($userID)
    {
        return $this
            ->where('userID', $userID)
            ->findAll();
    }

    public function getJumlahRespondenByRole($role)
    {
        return $this
            ->select('responden.role')
            ->join('jenis_responden', 'jenis_responden.responden = responden.role')
            ->where('role', $role)
            ->groupBy('userID')
            ->countAllResults();
    }
    public function joinRespondenUsers($userID)
    {
        return $this
            ->join('users', 'users.id = responden.userID')
            ->where('userID', $userID)
            ->groupBy('responden.userID')
            ->findAll();
    }
}
