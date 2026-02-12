<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Services\DeviceService;

class DeviceRestController extends ResourceController
{
    protected $service;
    protected $format = 'json';

    public function __construct()
    {
        $this->service = new DeviceService();
    }

    // GET /api/devices
    public function index()
    {
        return $this->respond($this->service->getAll());
    }

    // GET /api/devices/{id}
    public function show($id = null)
    {
        $device = $this->service->getById($id);
        return $device ? $this->respond($device) : $this->failNotFound('Device not found');
    }

    // POST /api/devices
    public function create()
    {
        $data = $this->request->getJSON(true);
        $id = $this->service->create($data);

        if (!$id) {
            return $this->failValidationErrors('Insert failed');
        }

        return $this->respondCreated($this->service->getById($id));
    }

    // PUT /api/devices/{id}
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        if (!$this->service->update($id, $data)) {
            return $this->failNotFound('Device not found or not updated');
        }

        return $this->respond($this->service->getById($id));
    }

    // DELETE /api/devices/{id}
    public function delete($id = null)
    {
        if (!$this->service->delete($id)) {
            return $this->failNotFound('Device not found');
        }

        return $this->respondDeleted(['message' => 'Device deleted']);
    }
}
