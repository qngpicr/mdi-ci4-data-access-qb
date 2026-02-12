<?php

namespace App\Controllers\Csr;
use App\Controllers\BaseController;

class DeviceCsrController extends BaseController
{
    // GET /csr/devices
    public function csrDevices()
    {
        // 단순히 뷰만 반환 (데이터는 JS에서 REST API 호출)
        return view('csr/csr_device_total');
    }
}
