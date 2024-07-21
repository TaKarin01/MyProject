<?php

use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\MainController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/store',[LoginController::class,'store']);
Route::middleware('auth')->group(function (){
   Route::prefix('admin')->group(function (){
       Route::get('/',[MainController::class,'index'])->name('admin');

       #CRUD-product
       Route::prefix('products')->group(function (){
            Route::get('add',[ProductController::class,'create']);
            Route::post('store',[ProductController::class,'store']);
            Route::get('list',[ProductController::class,'index']);
       });
   });
});
