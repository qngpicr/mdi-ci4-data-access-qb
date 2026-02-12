<?php

namespace App\Services;

use App\Models\MemberModel;

class MemberService
{
    protected $memberModel;

    public function __construct()
    {
        $this->memberModel = new MemberModel();
    }

    public function getAll()
    {
        return $this->memberModel->findAll();
    }

    public function getById($id)
    {
        return $this->memberModel->find($id);
    }

    public function create(array $data)
    {
        if (!$this->memberModel->insert($data)) {
            return false;
        }
        return $this->memberModel->getInsertID();
    }

    public function update($id, array $data)
    {
        return $this->memberModel->update($id, $data);
    }

    public function delete($id)
    {
        return $this->memberModel->delete($id);
    }
}
