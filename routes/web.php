<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/role', [RoleController::class, 'index']);
    Route::post('/role', [RoleController::class,'store'])->name('role.store');
    Route::view('/permission', 'permissions_form');
    Route::post('/permission', [PermissionController::class,'store'])->name('permission.store');

});

Route::group(['middleware' => ['role:admin']], function () {
    Route::view('/post', 'post');
    Route::post('/post', [PostController::class, 'post'])->name('post.store');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('role.edit');
    Route::post('/update/{id}', [HomeController::class, 'update'])->name('role.update');
});