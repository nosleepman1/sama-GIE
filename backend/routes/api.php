<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



//authentication 
Route::prefix('auth')->group(function () {
    require __DIR__.'/auth/guest.php';
});
