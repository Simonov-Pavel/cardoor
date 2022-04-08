<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MainController;


require __DIR__.'/auth.php';
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('get.logout');

Route::get('/', [MainController::class, 'index'])->name('index');
Route::middleware(['auth'])->group(function(){
    Route::resources(['user' => UserController::class,]);
    Route::group(['prefix'=>'account'], function(){
        Route::get('/', [App\Http\Controllers\Account\MainController::class, 'index'])->name('account');
    });

    Route::group(['prefix'=>'admin', 'middleware'=>['admin']], function(){
        Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin');
    });
});