<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Services\MemberService;

class MemberRestController extends ResourceController
{
    protected $service;
    protected $format = 'json';

    public function __construct()
    {
        $this->service = new MemberService();
    }

    // GET /api/members
    public function index()
    {
        return $this->respond($this->service->getAll());
    }

    // GET /api/members/{id}
    public function show($id = null)
    {
        $member = $this->service->getById($id);
        return $member ? $this->respond($member) : $this->failNotFound('Member not found');
    }

    // POST /api/members
    public function create()
    {
        $data = $this->request->getJSON(true);
        $id = $this->service->create($data);

        if (!$id) {
            return $this->failValidationErrors('Insert failed');
        }

        return $this->respondCreated($this->service->getById($id));
    }

    // PUT /api/members/{id}
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);
        if (!$this->service->update($id, $data)) {
            return $this->failNotFound('Member not found or not updated');
        }

        return $this->respond($this->service->getById($id));
    }

    // DELETE /api/members/{id}
    public function delete($id = null)
    {
        if (!$this->service->delete($id)) {
            return $this->failNotFound('Member not found');
        }

        return $this->respondDeleted(['message' => 'Member deleted']);
    }
}
