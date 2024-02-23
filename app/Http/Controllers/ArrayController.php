<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ArrayController extends Controller
{
    public function index()
    {
        echo '<h1>Array Helper</h1>';
        // last(), first()

       /* $array = [100, 200, 300, 100];
        $result = Arr::last($array, function($value,$key){
            return $value >= 150;
        });
        echo $result;  



        $array = [100, 200, 300, 100];
        $result = Arr::first($array, function($value,$key){
            return $value >= 150;
        });
        echo $result;  
        */

        // $array =  ['name' => 'Desk'];
        // $result = Arr::add($array, 'price', 100);
        // print_r($result);

        // $array = ['name' => 'Desk','price' => null];
        // print_r($array);
        // $result = Arr::add($array, 'price', 100);
        // print_r($result);
    

        // flatten() 평평하게 만드는??

        // $array = ['name' => 'Joe', 'language' => ['PHP','Ruby']];
        // print_r($array);

        // $result = Arr::flatten($array);
        // print_r($result);

        // dot()

        //$array = ['products' => ['desk' => ['price'=> 100,'quality' => 'high']]];
        // $array = ['name' => 'Joe', 'language' => ['PHP','Ruby']];
        
       // $result = Arr::dot($array);
        //print_r($result);
        

        // get()

        // $array = ['products' => ['desk'=>['price'=> 1000]]];
        // $price = Arr::get($array,'products.desk.pricex','Unknown');
        // echo $price;


        //join()

        $array = ['Tailwind','Alpine','Laravbel','Livewire'];
        $joined= Arr::join($array,', ');
        echo $joined;

    }
}
