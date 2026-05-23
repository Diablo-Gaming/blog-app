<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

//    Route::middleware('auth')->group(function () {
//        Route::get('/', [::class, 'index'])->name('blogs.index');
//        Route::get('/create', [::class, 'create'])->name('blogs.create');
//        Route::post('/store', [::class, 'store'])->name('blogs.store');
//        Route::get('/edit/{id}', [::class, 'edit'])->name('blogs.edit');
//        Route::put('/update/{id}', [::class, 'update'])->name('blogs.update');
//        Route::delete('/delete/{id}', [::class, 'destroy'])->name('blogs.delete');
//    });

    Route::middleware('guest')->controller(AuthController::class)->group(function () {
        Route::get('/register', 'showRegister')->name('show.register');
        Route::get('/login', 'showLogin')->name('show.login');

        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');
    });
