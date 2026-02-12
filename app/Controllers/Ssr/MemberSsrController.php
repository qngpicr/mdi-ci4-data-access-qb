<?php

namespace App\Controllers\Ssr;
use App\Controllers\BaseController;

use App\Services\MemberService;

class MemberSsrController extends BaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = new MemberService();
    }

    // GET /ssr/members
    public function ssrMembers()
    {
        $data['memberList'] = $this->service->getAll();
        return view('ssr/ssr_member_total', $data);
    }
}
