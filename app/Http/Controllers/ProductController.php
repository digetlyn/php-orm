<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {
        $products = ['PC','Notebook','Mouse','Keyboard'];  //첫 화면 상단에 이렇게 뿌려준다.
        return view('welcome', compact('products')); // ['PC','Notebook','Mouse','Keyboard']]
   }
}
