<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Member;

class MemberModel extends Model
{
    protected $table      = 'member';
    protected $primaryKey = 'id_member';
    protected $returnType = Member::class;
    protected $allowedFields = [
        'id',
        'pass',
        'name',
        'email',
        'regist_day',
        'role',
        'status',
        'email_verified',
        'fail_count',
        'last_login',
        'updated_at',
        'deleted_at'
    ];

    public function selectAllMembers()
    {
        return $this->findAll();
    }

    public function selectMemberById($id)
    {
        return $this->where('id_member', $id)->first();
    }

    public function insertMember(array $data)
    {
        $this->insert($data);
        return $this->getInsertID();
    }

    public function updateMember($id, array $data)
    {
        return $this->update($id, $data);
    }

    public function deleteMember($id)
    {
        return $this->delete($id);
    }
}
