<?php

namespace Myth\Auth\Models;

use CodeIgniter\Model;
use Myth\Auth\Authorization\GroupModel;
use Myth\Auth\Entities\User;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = User::class;
    // protected $useSoftDeletes = true;

    // protected $allowedFields = [
    //     'email', 'username', 'fullname', 'role', 'programStudi', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
    //     'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    // ];
    protected $protectFields = false;

    protected $useTimestamps = true;

    protected $validationRules = [
        'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
        'username'      => 'required|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
        'password_hash' => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;

    protected $afterInsert = ['addToGroup'];

    /**
     * The id of a group to assign.
     * Set internally by withGroup.
     *
     * @var int|null
     */
    protected $assignGroup;

    /**
     * Logs a password reset attempt for posterity sake.
     *
     * @param string      $email
     * @param string|null $token
     * @param string|null $ipAddress
     * @param string|null $userAgent
     */
    public function logResetAttempt(string $email, string $token = null, string $ipAddress = null, string $userAgent = null)
    {
        $this->db->table('auth_reset_attempts')->insert([
            'email' => $email,
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'token' => $token,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Logs an activation attempt for posterity sake.
     *
     * @param string|null $token
     * @param string|null $ipAddress
     * @param string|null $userAgent
     */
    public function logActivationAttempt(string $token = null, string $ipAddress = null, string $userAgent = null)
    {
        $this->db->table('auth_activation_attempts')->insert([
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'token' => $token,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Sets the group to assign any users created.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroup(string $groupName)
    {
        $group = $this->db->table('auth_groups')->where('name', $groupName)->get()->getFirstRow();

        $this->assignGroup = $group->id;

        return $this;
    }

    /**
     * Clears the group to assign to newly created users.
     *
     * @return $this
     */
    public function clearGroup()
    {
        $this->assignGroup = null;

        return $this;
    }

    /**
     * If a default role is assigned in Config\Auth, will
     * add this user to that group. Will do nothing
     * if the group cannot be found.
     *
     * @param mixed $data
     *
     * @return mixed
     */
    protected function addToGroup($data)
    {
        if (is_numeric($this->assignGroup)) {
            $groupModel = model(GroupModel::class);
            $groupModel->addUserToGroup($data['id'], $this->assignGroup);
        }

        return $data;
    }


    public function cekUsers($email)
    {
        return $this
            ->select('email')
            ->where('email', $email)
            ->findAll();
    }

    public function getDataUser($id)
    {
        return $this
            ->where('id', $id)
            ->findAll();
    }

    public function getAdminUser()
    {
        return $this
            ->where('role', 'Admin')
            ->findAll();
    }
    public function getKontributor()
    {
        return $this
            ->where('role', 'Kontributor')
            ->findAll();
    }
    public function getDosen()
    {
        return $this
            ->where('role', 'Dosen')
            ->findAll();
    }
    public function getDataDosen($id)
    {
        return $this
            ->where('id', $id)
            ->where('role', 'Dosen')
            ->get()->getResultArray();
    }

    public function lastActivity($id)
    {
        return $this
            ->join('auth_logins', 'auth_logins.user_id = users.id')
            ->where('users.id', $id)
            ->groupBy('auth_logins.date')
            // ->orderBy('auth_logins.id', 'asc')
            ->orderBy('auth_logins.id', 'desc')
            ->limit(1)
            ->get()->getResultObject();
        // ->findAll();

        // ->getRow();
        // ->get()->getLastRow();
    }


    public function getJawabanDataDiri()
    {
        return $this
            ->where('role', 'Admin')
            ->findAll();
    }
}
