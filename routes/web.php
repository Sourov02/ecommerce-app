<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardConroller;
use App\Http\Controllers\ProductConroller;
use App\Http\Controllers\UserConroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/single-product/{id}',[HomeController::class,'singleProduct'])->name('single.product');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboardConroller::class,'index'])->name('dashboard');

    Route::get('/add-user',[UserConroller::class,'addUser'])->name('add.user');
    Route::get('/manage-user',[UserConroller::class,'manageUser'])->name('manage.user');
    Route::post('/new-user',[UserConroller::class,'saveUser'])->name('new.user');
    Route::get('/user-edit/{id}',[UserConroller::class,'editUser'])->name('user.edit');
    Route::post('/user-delete',[UserConroller::class,'deleteUser'])->name('user.delete');
    Route::post('update-user',[UserConroller::class,'updateUser'])->name('update.user');


    Route::get('/add-product',[ProductConroller::class,'addProduct'])->name('add.product');
    Route::get('/manage-product',[ProductConroller::class,'manageProduct'])->name('manage.product');
    Route::post('/new-product',[ProductConroller::class,'saveProduct'])->name('new.product');


    Route::get('/product-edit/{id}',[ProductConroller::class,'editProduct'])->name('product.edit');
    Route::get('/product-status/{id}',[ProductConroller::class,'statusProduct'])->name('product.status');
    Route::post('/product-delete',[ProductConroller::class,'deleteProduct'])->name('product.delete');
    Route::post('/update-product',[ProductConroller::class,'updateProduct'])->name('update.product');

});
