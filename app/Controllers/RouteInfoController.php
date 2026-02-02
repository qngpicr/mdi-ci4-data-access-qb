<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class RouteInfoController extends Controller
{
    // GET /routes
    public function index()
    {
        $routesCollection = Services::routes();
        $routes = [];

        foreach ($routesCollection->getRoutes() as $uri => $handler) {
            $routes[] = [
                'uri'    => $uri,
                'method' => 'ALL',   // CI4도 기본은 Method 구분 없이 등록 가능
                'target' => $handler
            ];
        }

        return $this->response->setJSON($routes);
    }
}
