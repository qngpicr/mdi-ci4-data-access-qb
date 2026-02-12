<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Device;

class DeviceModel extends Model
{
    protected $table      = 'device';       // 테이블명
    protected $primaryKey = 'id_device';    // PK
    protected $returnType = Device::class;  // 반환 타입 (Entity)
    protected $allowedFields = [
        'name_device',
        'id_cpu',
        'lineup_device',
        'release_device',
        'weight_device',
        'type_code_device',
        'manf_code_device'
    ];

    // 전체 조회
    public function selectAllDevices()
    {
        return $this->select([
                'id_device',
                'name_device',
                'id_cpu',
                'lineup_device',
                'release_device',
                'weight_device',
                'type_code_device',
                'manf_code_device'
            ])
            ->findAll();
    }

    // 단일 조회
    public function selectDeviceById($id)
    {
        return $this->select([
                'id_device',
                'name_device',
                'id_cpu',
                'lineup_device',
                'release_device',
                'weight_device',
                'type_code_device',
                'manf_code_device'
            ])
            ->where('id_device', $id)
            ->first();
    }

    // 생성
    public function insertDevice(array $data)
    {
        $this->insert($data);
        return $this->getInsertID();
    }

    // 수정
    public function updateDevice($id, array $data)
    {
        return $this->update($id, $data);
    }

    // 삭제
    public function deleteDevice($id)
    {
        return $this->delete($id);
    }
}
