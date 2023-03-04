<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role:user'])->name('dashboard');

//Route::get('/userprofile', [DashboardController::class,'Index']);

Route::middleware(['auth','role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function(){
    Route::get('/admin/dashboard','Index')->name('admindashboard');
   
});




// Route::controller(CategoryController::class)->group(function(){
//     Route::get('/admin/all-category','index')->name('allcategory');
//     Route::get('/admin/add-category','addCategory')->name('addcategory');
   
// });

Route::get('/admin/all-category',[CategoryController::class,'Index'])->name('allcategory');
Route::get('/admin/add-category',[CategoryController::class,'AddCategory'])->name('addcategory');
Route::post('/admin/store-category',[CategoryController::class,'StoreCategory'])->name('storecategory');
Route::get('/admin/edit-category/{id}',[CategoryController::class,'EditCategory'])->name('editcategory');
Route::get('/admin/delete-category/{id}',[CategoryController::class,'DeleteCategory'])->name('deletecategory');
Route::post('/admin/update-category',[CategoryController::class,'UpdateCategory'])->name('updatecategory');


Route::controller(SubCategoryController::class)->group(function(){
    Route::get('/admin/all-subcategory','Index')->name('allsubcategory');
    Route::get('/admin/add-subcategory','AddSubCategory')->name('addsubcategory');
    Route::post('/admin/store-subcategory','StoreSubCategory')->name('storesubcategory');
   
});   
Route::controller(ProductController::class)->group(function(){
    Route::get('/admin/all-product','Index')->name('allproduct');
    Route::get('/admin/add-product','AddProduct')->name('addproduct');
   
});   

});

require __DIR__.'/auth.php';
