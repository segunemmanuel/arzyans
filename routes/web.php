<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

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
    $brands=DB::table('brands')->get();
    return view('home',compact('brands'));
});


// Category controller
Route::get('/category/all',[CategoryController::class,'AllCat'])->name('all.category');



// Category controller
Route::post('/category/add',[CategoryController::class,'AddCat'])->name('store.category');

// Edit categories
Route::get('/category/edit/{id}',[CategoryController::class,'Edit']);
// udpated categories
Route::post('/category/update/{id}',[CategoryController::class,'Update']);

// soft delete
Route::get('category/softdelete/{id}',[CategoryController::class,'Softdelete']);

// restoration
Route::get('category/restore/{id}',[CategoryController::class,'Restore']);

// peemr delete
Route::get('category/pdelete/{id}',[CategoryController::class,'Pdelete']);


// peemr delete

// all brands routes
Route::get('/brand/all',[BrandController::class,'Allbrand'])->name('all.brand');

Route::post('/brand/add',[BrandController::class,'Addbrand'])->name('store.brand');

Route::get('/brand/edit/{id}',[BrandController::class,'Edit']);
Route::post('/brand/update/{id}',[BrandController::class,'Update']);
Route::get('/brand/delete/{id}',[BrandController::class,'Delete']);


// Mutiple images routes
Route::get('/multi/image',[BrandController::class,'Multi'])->name('multi.image');
Route::post('/multi/add',[BrandController::class,'StoreImg'])->name('store.image');

// Admin routes



// Slider routes
Route::get('/home/slider',[HomeController::class,'HomeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class,'AddSlider'])->name('add.slider');
Route::post('/store/slider',[HomeController::class,'StoreSlider'])->name('store.slider');











Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::get('/user/logout', [BrandController::class,'Logout'])->name('user.logout');










