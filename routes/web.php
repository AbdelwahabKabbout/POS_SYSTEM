<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);
Route::get("/admin", function () {
    return view('admin.home');
})->name('admin.Home');
Route::get("/waiter", function () {
    return view('waiter.home');
})->name('waiter.Home');
Route::get("/chef", function () {
    return view('chef.home');
})->name('chef.Home');


//admin
Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'getAllUsers'])->name('admin.users');
