<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;


class StringController extends Controller
{
    public function index()
    {
        echo '<h1>Stringer Helper</h1>';

        echo "Str::of('Welcome to my Youtube Channel')->after('Welcome to');";
        $rs = Str::of('Welcome to my Youtube Channel')->after('Welcome to');
        echo "<br>결과 :" .$rs."<br><br>";

        echo "Str::of('This is my name')->->before('my');";
        $rs =Str::of('This is my name')->before('my');
        echo "<br>결과 :" .$rs."<br><br>";

        echo "Str::of('aaaa.tt.jpg')->afterLast('.');";
        $rs=Str::of('aaaa.tt.jpg')->afterLast('.');
        echo "<br>결과 :" .$rs."<br><br>";

        echo "Str::of('Laravel 9.0') -> replace('9.0','10.0');";
        $rs = Str::of('Laravel 9.0') -> replace('9.0','10.0');
        echo "<br>결과 :" .$rs."<br><br>";

        echo "Str::of('Lavavel 10 Framework')->slug();";
        $rs = Str::of('Lavavel 10 Framework')->slug();
        echo "<br>결과 :" .$rs."<br><br>";


       // $rs = Str::of('-')->repeat(20);
        $rs = Str::repeat('=',20);
        echo "<br>결과 :" .$rs."<br><br>";


        $rs = Str::random(40);
        echo "<br>결과 :" .$rs."<br><br>";


        //$rs = Str::remove('e', 'Peter Piper picked a pack of pickled peppers');
        $rs = Str::of('Peter Piper picked a pack of pickled peppers')->remove('e');
        echo "<br>결과 :" .$rs."<br><br>";


        $rs = Str::of('This in my name')->containsAll(['my','name']);
        echo "<br>결과 :" .$rs."<br><br>";

        // upper(); 대문자로 다 바꿔준다
        // lower()
        // substr(5,5)


        $rs=Str::of('Hello')->append('World!');   //뒤에다가 붙여준다.
        echo "<br>결과 :" .$rs."<br><br>";




    

    }



}