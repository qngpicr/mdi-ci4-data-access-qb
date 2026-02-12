<?php

namespace App\Controllers\Csr;
use App\Controllers\BaseController;

class CpuCsrController extends BaseController
{
    // GET /csr/cpus
    public function csrCpus()
    {
        // 단순히 뷰만 반환 (데이터는 JS에서 REST API 호출)
        return view('csr/csr_cpu_total');
    }
}
