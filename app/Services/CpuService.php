<?php

namespace App\Services;

use App\Models\CpuModel;

class CpuService
{
    protected $cpuModel;

    public function __construct()
    {
        $this->cpuModel = new CpuModel();
    }

    // 전체 조회
    public function getAll()
    {
        return $this->cpuModel->findAll();
    }

    // 단일 조회
    public function getById($id)
    {
        return $this->cpuModel->find($id);
    }

    // 생성
    public function create(array $data)
    {
        if (!$this->cpuModel->insert($data)) {
            return false;
        }
        return $this->cpuModel->getInsertID();
    }

    // 수정
    public function update($id, array $data)
    {
        return $this->cpuModel->update($id, $data);
    }

    // 삭제
    public function delete($id)
    {
        return $this->cpuModel->delete($id);
    }
}
