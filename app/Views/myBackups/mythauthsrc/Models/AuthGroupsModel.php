<?php

namespace Myth\Auth\Models;

use CodeIgniter\Model;
use Myth\Auth\Authorization\GroupModel;
use Myth\Auth\Entities\User;

class AuthGroupsModel extends Model
{
    protected $table = 'auth_groups';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name', 'description', 'jenisRespondenID'
    ];
}
