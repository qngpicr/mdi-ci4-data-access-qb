<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Member extends Entity
{
    protected $attributes = [
        'id_member'      => null,
        'id'             => null,
        'pass'           => null,
        'name'           => null,
        'email'          => null,
        'regist_day'     => null,
        'role'           => null,
        'status'         => null,
        'email_verified' => null,
        'fail_count'     => null,
        'last_login'     => null,
        'updated_at'     => null,
        'deleted_at'     => null,
    ];
}
