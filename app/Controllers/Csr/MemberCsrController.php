<?php

namespace App\Controllers\Csr;
use App\Controllers\BaseController;

class MemberCsrController extends BaseController
{
    // GET /csr/members
    public function csrMembers()
    {
        // 뷰만 반환 (데이터는 JS에서 REST API 호출)
        return view('csr/csr_member_total');
    }
}
