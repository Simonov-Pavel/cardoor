<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ContactController;


require __DIR__.'/auth.php';
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('get.logout');

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::middleware(['auth'])->group(function(){
    Route::group(['prefix'=>'account'], function(){
        Route::get('/', [App\Http\Controllers\Account\MainController::class, 'index'])->name('account');
    });

    Route::group(['prefix'=>'admin', 'middleware'=>['admin']], function(){
        Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin');
        Route::resources([
            'contact' => ContactController::class,
        ]);
    });
});