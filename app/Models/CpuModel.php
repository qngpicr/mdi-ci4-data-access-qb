<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Cpu;

class CpuModel extends Model
{
    protected $table      = 'cpu';       // 테이블명
    protected $primaryKey = 'id_cpu';    // PK
    protected $returnType = Cpu::class;  // 반환 타입 (Entity)
    protected $allowedFields = [
        'name_cpu',
        'release_cpu',
        'core_cpu',
        'thread_cpu',
        'maxghz_cpu',
        'minghz_cpu',
        'type_code_cpu',
        'manf_code_cpu'
    ];

    // 전체 조회
    public function selectAllCpus()
    {
        return $this->select([
                'id_cpu',
                'name_cpu',
                'release_cpu',
                'core_cpu',
                'thread_cpu',
                'maxghz_cpu',
                'minghz_cpu',
                'type_code_cpu',
                'manf_code_cpu'
            ])
            ->findAll();
    }

    // 단일 조회
    public function selectCpuById($id)
    {
        return $this->select([
                'id_cpu',
                'name_cpu',
                'release_cpu',
                'core_cpu',
                'thread_cpu',
                'maxghz_cpu',
                'minghz_cpu',
                'type_code_cpu',
                'manf_code_cpu'
            ])
            ->where('id_cpu', $id)
            ->first();
    }

    // 생성
    public function insertCpu(array $data)
    {
        $this->insert($data);
        return $this->getInsertID();
    }

    // 수정
    public function updateCpu($id, array $data)
    {
        return $this->update($id, $data);
    }

    // 삭제
    public function deleteCpu($id)
    {
        return $this->delete($id);
    }
}
