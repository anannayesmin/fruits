<?php
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CatagoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/admin-master',[AdminController::class,'master']);
Route::get('/admin-new-page',[AdminController::class,'page'])->name('admin.new.page');

Route::get('/catagory-list',[CatagoryController::class,'list'])->name('catagory.list');
Route::get('/catagory-create',[CatagoryController::class,'create'])->name('catagory.create.form');
Route::Post('/catagory-form',[CatagoryController::class,'submit'])->name('catagory.form');

Route::get('/product-list',[ProductController::class,'listi'])->name('product.list');
Route::get('/product-create',[ProductController::class,'create'])->name('product.create.form');
Route::Post('/product-list',[ProductController::class,'submit'])->name('product.form');
