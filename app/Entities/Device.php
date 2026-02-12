<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Device extends Entity
{
    protected $attributes = [
        'id_device'       => null,
        'name_device'     => null,
        'id_cpu'          => null,
        'lineup_device'   => null,
        'release_device'  => null,
        'weight_device'   => null,
        'type_code_device'=> null,
        'manf_code_device'=> null,
    ];
}
