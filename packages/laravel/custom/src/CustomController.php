<?php

namespace laravel\custom;

use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function add($a,$b){
        $result= $a+$b;
        return view('custom::add',compact('result'));
    }
    public function sub($a,$b){
        $result= $a-$b;
        return view('custom::sub',compact('result'));
    }public function multiply($a,$b){
        $result= $a*$b;
        return view('custom::multiply',compact('result'));
    }public function divide($a,$b){
        $result= $a/$b;
        return view('custom::divide',compact('result'));
    }public function modulus($a,$b){
        $result= $a%$b;
        return view('custom::modulus',compact('result'));
    }
}
