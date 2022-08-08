<?php

namespace custom\calculator;

use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function add($a,$b){
        $result= $a+$b;
        return view('calculator::add',compact('result'));
    }
    public function sub($a,$b){
        $result= $a-$b;
        return view('calculator::sub',compact('result'));
    }public function multiply($a,$b){
        $result= $a*$b;
        return view('calculator::multiply',compact('result'));
    }public function divide($a,$b){
        $result= $a/$b;
        return view('calculator::divide',compact('result'));
    }public function modulus($a,$b){
        $result= $a%$b;
        return view('calculator::modulus',compact('result'));
    }
}
