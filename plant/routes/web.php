<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*Route::get('/', function () {
    return view('welcome');
});*/

//route::get(uri: '/',[HomeController::class,'index']);

//route::get(uri: '/home',[HomeController::class,'index2']);//plant home

Route::get('/', [HomeController::class, 'index'])->name('shop');
Route::get('/userhome', [HomeController::class, 'index2']); // plant home


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/order', [AdminController::class, 'order']);

route::get('/delivered/{id}', [AdminController::class, 'delivered']);
