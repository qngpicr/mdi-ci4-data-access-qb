<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Cpu extends Entity
{
    protected $attributes = [
        'id_cpu'       => null,
        'name_cpu'     => null,
        'release_cpu'  => null,
        'core_cpu'     => null,
        'thread_cpu'   => null,
        'maxghz_cpu'   => null,
        'minghz_cpu'   => null,
        'type_code_cpu'=> null,
        'manf_code_cpu'=> null,
    ];
}
