<?php

use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/users/login',[LoginController::class,'index']);

