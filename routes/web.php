<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminPartnerController;
use App\Http\Controllers\Admin\AdminServiceDescriptionController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminBrandController;
use App\Http\Controllers\Admin\AdminBodyController;
use App\Http\Controllers\Account\AccountUserCotroller;


require __DIR__.'/auth.php';
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('get.logout');

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/message', [MessageController::class, 'store'])->name('messageStore');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service-show');

Route::middleware(['auth'])->group(function(){
    
    Route::group(['prefix'=>'account'], function(){
        Route::get('/', [App\Http\Controllers\Account\MainController::class, 'index'])->name('account');
        Route::resources([
            'persona' => AccountUserCotroller::class,
        ]);
    });

    Route::group(['prefix'=>'admin', 'middleware'=>['admin']], function(){
        Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin');
        
        Route::get('/user/{user}/restore', [AdminUserController::class, 'restore'])->name('admin.user.restore');
        Route::delete('/user/{user}/force_delete', [AdminUserController::class, 'forceDelete'])->name('admin.user.forceDelete');
        Route::resources([
            'contact' => AdminContactController::class,
            'message' => AdminMessageController::class,
            'user' => AdminUserController::class,
            'banner' => AdminBannerController::class,
            'about' => AdminAboutController::class,
            'partner' => AdminPartnerController::class,
            'service-description' => AdminServiceDescriptionController::class,
            'service' => AdminServiceController::class,
            'brand' => AdminBrandController::class,
            'body' => AdminBodyController::class,
        ]);
    });
});