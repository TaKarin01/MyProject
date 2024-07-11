<?php

use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\MainController;
use Illuminate\Support\Facades\Route;

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/store',[LoginController::class,'store']);
Route::middleware('auth')->group(function (){
   Route::get('admin/main',[MainController::class,'index'])->name('admin');
});
