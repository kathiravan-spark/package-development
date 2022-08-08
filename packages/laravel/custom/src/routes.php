<?php

use Illuminate\Support\Facades\Route;






Route::get('/custom',function(){
    echo "hai hello";
});
Route::get('/add/{a}/{b}',[laravel\custom\CustomController::class,'add']);
Route::get('/sub/{a}/{b}',[laravel\custom\CustomController::class,'sub']);
Route::get('/multiply/{a}/{b}',[laravel\custom\CustomController::class,'multiply']);
Route::get('/divide/{a}/{b}',[laravel\custom\CustomController::class,'divide']);
Route::get('/modulus/{a}/{b}',[laravel\custom\CustomController::class,'modulus']);