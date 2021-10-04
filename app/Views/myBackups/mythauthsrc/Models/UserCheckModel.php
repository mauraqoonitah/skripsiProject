<?php

namespace Myth\Auth\Models;

use CodeIgniter\Model;
use Myth\Auth\Authorization\GroupModel;
use Myth\Auth\Entities\User;

class UserCheckModel extends Model
{
    protected $table = 'user_check';

    protected $allowedFields = [
        'email', 'role', 'nim', 'namaLengkap', 'programStudi', 'angkatan', 'nidn', 'fakultas', 'id_user',
    ];
    protected $useTimestamps = true;

    public function getUserCheck($nim = false)
    {
        if ($nim == false) {
            return $this
                ->findAll();
        }

        return $this->where(['nim' => $nim])->first();
    }

    public function getUserCheckByInput($nim)
    {
        return $this
            ->where('nim', $nim)
            ->findAll();
        dd($nim);
    }
}
