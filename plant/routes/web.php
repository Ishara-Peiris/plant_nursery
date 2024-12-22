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

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_catagory',[AdminController::class,'view_catagory']);
route::post('/add_catagory',[AdminController::class,'add_catagory']);
route::post('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);

route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

