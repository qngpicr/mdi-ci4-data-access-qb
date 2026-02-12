<?php

namespace App\Controllers\Ssr;
use App\Controllers\BaseController;

use App\Services\DeviceService;

class DeviceSsrController extends BaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = new DeviceService();
    }

    // GET /ssr/devices
    public function ssrDevices()
    {
        $data['deviceList'] = $this->service->getAll();
        return view('ssr/ssr_device_total', $data);
    }
}
