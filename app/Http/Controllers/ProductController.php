<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {
        $products = ['PC','Notebook','Mouse','Keyboard'];
        return view('welcome', compact('products')); // ['PC','Notebook','Mouse','Keyboard']]
   }
}
