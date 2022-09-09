<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\EcommController;
// use App\Http\Controllers\ToysController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\Admin\AdminLoginController;
// use App\Http\Controllers\Admin\AdminDashboardController;
// use App\Http\Controllers\Admin\AddCategoryController;
// use App\Http\Controllers\Admin\AddSubcategoryController;
use App\Http\Controllers\AddBlogController;
use App\Http\Controllers\AddGalleryController;


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
// main routing for ecomm projects
// Route::get('/',function(){
//    return view('aboutus');
// });
//routing
//Route::get('/',[EcommController::class,'index']);
// Route::get('/showdata',[UserController::class,'index']);
// // user panel routing for toys shop
// // routing for toys shoping home page load
// Route::get('/',[ToysController::class,'index']);
// // routing for load about us page
// Route::get('/about-us',function(){
//     return view('toysshop.about');
// });
// // routing for load contact us page
// Route::get('/contact-us',[ContactController::class,'index']);
// // admin panel routing for toys shop
// // routing for load admin login  page
// Route::get('/admin-login',[AdminLoginController::class,'index']);
// // routing for load admin dashboard  page
// Route::get('/admin-login/admin-dashboard',[AdminDashboardController::class,'index']);
// // routing for load admin add category  page
// Route::get('/admin-login/addcategory',[AddCategoryController::class,'index']);
// Route::post('/admin-login/addcategory',[AddCategoryController::class,'store']);
// Route::get('/admin-login/managecategory',[AddCategoryController::class,'show']);
// Route::get('/admin-login/managecategory/{id}',[AddCategoryController::class,'destroy']);
// Route::get('/admin-login/editcategory/{id}',[AddCategoryController::class,'edit']);
// Route::post('/admin-login/editcategory/{id}',[AddCategoryController::class,'update']);
// // routing for load admin add Subcategory  page
// Route::get('/admin-login/addsubcategory',[AddSubcategoryController::class,'index']);
// Route::post('/admin-login/addsubcategory',[AddSubcategoryController::class,'store']);
// Route::get('/admin-login/managesubcategory',[AddSubcategoryController::class,'show']);
// Route::get('/admin-login/managesubcategory/{id}',[AddSubcategoryController::class,'destroy']);
// Route::get('/admin-login/editsubcategory/{id}',[AddSubcategoryController::class,'edit']);
// Route::post('/admin-login/editsubcategory/{id}',[AddSubcategoryController::class,'update']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// add blogs
Route::get('/addblog',[AddBlogController::class,'index']);
Route::post('/addblog',[AddBlogController::class,'store']);
Route::get('/manageblog',[AddBlogController::class,'show']);
// add gallery
Route::get('/addgallery',[AddGalleryController::class,'index']);
Route::post('/addgallery',[AddGalleryController::class,'store']);
Route::get('/managegallery',[AddGalleryController::class,'show']);