<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest'); // 不需認證
        $this->middleware('auth');  // 需認證
    }

    public function index()
    {
        return '訪問學生頁面';
    }
}
