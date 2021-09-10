<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
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
Route::get('/multi/image',[BrandController::class,'Multi'])->name('multi.brand');




    


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // use ORM to query DB
    // Fetching all users from the user model using ORM;
$users=User::all();
    // Fetching all users from the user model using QUERY BUILDER;
// $users= DB::table('users')->get();
// pass user data into page;
    return view('dashboard', compact('users'));
})->name('dashboard');
 
