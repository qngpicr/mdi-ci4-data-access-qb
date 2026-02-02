<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 기본 컨트롤러
$routes->get('/', 'MainController::index');

// 라우트 정보 조회 (CI4용)
$routes->get('routes', 'RouteInfoController::index');

// CSR (Client-Side Rendering)
$routes->get('csr/cpus', 'CpuCsrController::csrCpus');
$routes->get('csr/devices', 'DeviceCsrController::csrDevices');
$routes->get('csr/members', 'MemberCsrController::csrMembers');

// SSR (Server-Side Rendering)
$routes->get('ssr/cpus', 'CpuSsrController::ssrCpus');
$routes->get('ssr/devices', 'DeviceSsrController::ssrDevices');
$routes->get('ssr/members', 'MemberSsrController::ssrMembers');

// REST API (자동 매핑)
// resource()는 기본적으로 index/show/create/update/delete 라우트를 자동 생성합니다.
// 컨트롤러 네임스페이스를 명시해주는 것이 안전합니다.
$routes->resource('api/cpus', ['controller' => 'Api\CpuRestController']);
$routes->resource('api/devices', ['controller' => 'Api\DeviceRestController']);
$routes->resource('api/members', ['controller' => 'Api\MemberRestController']);
