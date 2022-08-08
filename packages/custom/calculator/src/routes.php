<?php

use Illuminate\Support\Facades\Route;






Route::get('/custom',function(){
    echo "hai hello";
});
Route::get('/add/{a}/{b}',[custom\calculator\CustomController::class,'add']);
Route::get('/sub/{a}/{b}',[custom\calculator\CustomController::class,'sub']);
Route::get('/multiply/{a}/{b}',[custom\calculator\CustomController::class,'multiply']);
Route::get('/divide/{a}/{b}',[custom\calculator\CustomController::class,'divide']);
Route::get('/modulus/{a}/{b}',[custom\calculator\CustomController::class,'modulus']);