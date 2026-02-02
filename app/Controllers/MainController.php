<?php

namespace App\Controllers;

class MainController extends BaseController
{
    // GET /
    public function index()
    {
        // index 뷰 반환
        return view('index');
    }
}
