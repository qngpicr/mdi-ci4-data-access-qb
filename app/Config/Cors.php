<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cors extends BaseConfig
{
    public array $default = [
        // 허용할 Origin (프론트엔드 주소)
        // 'allowedOrigins' => ['http://localhost:3000', 'https://www.example.com'],
        'allowedOrigins' => ['http://localhost:9041'],


        // 정규식 패턴으로 Origin 허용 (필요 시)
        'allowedOriginsPatterns' => [],

        // 쿠키/세션 등 Credential 허용 여부
        'supportsCredentials' => true,

        // 허용할 요청 헤더
        'allowedHeaders' => ['Content-Type', 'Authorization'],

        // 브라우저에서 접근 가능한 응답 헤더
        'exposedHeaders' => [],

        // 허용할 HTTP 메서드
        'allowedMethods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],

        // Preflight 결과 캐시 시간(초)
        'maxAge' => 7200,
    ];
}
