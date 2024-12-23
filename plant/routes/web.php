<?php
namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Admin\NewsletterController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminController;
//use App\Http\Controllers\Admin\NewsletterController;
//use app\Http\Controllers\Admin\NewsletterController;

use App\Http\Controllers\BotManController;




//cgptroutes
Route::get('/dd', function () {
    return view('welcome');
});

//route::get(uri: '/',[HomeController::class,'index']);

//route::get(uri: '/home',[HomeController::class,'index2']);//plant home

Route::get('/', [HomeController::class, 'index'])->name('shop');
Route::get('/userhome', [HomeController::class, 'index2'])->name('landing'); // plant home
Route::get('/blog', [HomeController::class, 'blog'])->name('blog')->name('blog');//blogpage route
Route::get('/about', [HomeController::class, 'about'])->name('about')->name('about');//blogpage route


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

//discussion_routes
Route::get('/discussion/create', [PostController::class, 'create'])->name('discussion.create');
Route::post('/discussion/store', action: [PostController::class, 'store'])->name('discussion.store');
Route::get('/forum', action: [PostController::class, 'index'])->name('forum');



//handlenewletter
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');



//addproduct relted
Route::get('/view_product', action: [AdminController::class, 'view_product'])->name('view_product');
Route::post('/add_product',action: [AdminController::class,"add_product"])->name("add_product");
//show product in adminpanel
route::get('/show_product',[AdminController::class,'show_product']);
//delete update
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);

//addcart_checklogin



//chatbot
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');


//catagory
route::get('/view_catagory',[AdminController::class,'view_catagory']);
route::post('/add_catagory',[AdminController::class,'add_catagory']);
route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);



//newsletter
//Route::get('admin/Subscribers','NewsletterController@subscribers');

//Route::get('/subscribers', 'Admin\NewsletterController@subscribers');



//product_detals
route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::post('/add_cart/{id}',action: [HomeController::class,'add_cart']);



//show_cart
route::get('/show_cart',[HomeController::class,'show_cart']);
//delete cartitems
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

//cashondelivery
route::get('/cash_order',[HomeController::class,'cash_order']);

//stripe
route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);
route::post('stripe/{totalprice}', [HomeController::class,'stripePost'])->name('stripe.post');




//ordershow in admin panel
route::get('/order', [AdminController::class, 'order']);
//MAKE DELIVERY
route::get('/delivered/{id}', [AdminController::class, 'delivered']);

