<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        return '欢迎来到这里';
    }
    public function about(){
        return '关于我们，我们的简介页面';
    }
}
