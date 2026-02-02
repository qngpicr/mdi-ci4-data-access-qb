<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Services\CpuService;

class CpuRestController extends ResourceController
{
    protected $service;
    protected $format = 'json';

    public function __construct()
    {
        $this->service = new CpuService();
    }

    // GET /api/cpus
    public function index()
    {
        return $this->respond($this->service->getAll());
    }

    // GET /api/cpus/{id}
    public function show($id = null)
    {
        $cpu = $this->service->getById($id);
        return $cpu ? $this->respond($cpu) : $this->failNotFound('CPU not found');
    }

    // POST /api/cpus
    public function create()
    {
        $data = $this->request->getJSON(true);
        $id = $this->service->create($data);

        if (!$id) {
            return $this->failValidationErrors('Insert failed');
        }

        return $this->respondCreated($this->service->getById($id));
    }

    // PUT /api/cpus/{id}
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        if (!$this->service->update($id, $data)) {
            return $this->failNotFound('CPU not found or not updated');
        }

        return $this->respond($this->service->getById($id));
    }

    // DELETE /api/cpus/{id}
    public function delete($id = null)
    {
        if (!$this->service->delete($id)) {
            return $this->failNotFound('CPU not found');
        }

        return $this->respondDeleted(['message' => 'CPU deleted']);
    }
}
