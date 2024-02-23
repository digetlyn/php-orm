<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name = null): string 
    {
        return '안녕하세요 from HomeController 이름? ' .$name;
    }
}
