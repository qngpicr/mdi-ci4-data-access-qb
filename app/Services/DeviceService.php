<?php

namespace App\Services;

use App\Models\DeviceModel;

class DeviceService
{
    protected $deviceModel;

    public function __construct()
    {
        $this->deviceModel = new DeviceModel();
    }

    // 전체 조회
    public function getAll()
    {
        return $this->deviceModel->findAll();
    }

    // 단일 조회
    public function getById($id)
    {
        return $this->deviceModel->find($id);
    }

    // 생성
    public function create(array $data)
    {
        if (!$this->deviceModel->insert($data)) {
            return false;
        }
        return $this->deviceModel->getInsertID();
    }

    // 수정
    public function update($id, array $data)
    {
        return $this->deviceModel->update($id, $data);
    }

    // 삭제
    public function delete($id)
    {
        return $this->deviceModel->delete($id);
    }
}
