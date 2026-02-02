<?php

namespace App\Controllers;

use App\Services\CpuService;

class CpuSsrController extends BaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = new CpuService();
    }

    // GET /ssr/cpus
    public function ssrCpus()
    {
        $data['cpuList'] = $this->service->getAll();
        return view('ssr/ssr_cpu_total', $data);
    }
}
