<?php

use App\Http\Controllers\ContentBlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceRequestsController;
use App\Http\Controllers\StarredProjectsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProductsController;
use App\Models\Client;
use App\Models\ContentBlog;
use App\Models\Image;
use App\Models\Partner;
use App\Models\Service;
use App\Models\StarredProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('laravel_dashboard');
})->middleware(['auth'])->name('dashboard');*/


/*
*  Auth Routes
*/
require __DIR__.'/auth.php';

/*
*  frontsite Routes
*/
Route::group([],function(){ 
    // frontsite home page
    Route::get('/',[HomeController::class ,'index'])->name("home");
    // frontsite Content Blogs pages
    Route::get('/contentBlogs',[ContentBlogsController::class ,'index'])->name("contentBlogs.index");
    Route::get('/contentBlog/{id}/{name}',[ContentBlogsController::class ,'show'] )->name("contentBlog.show");
    Route::post('/contentBlog_like',[ContentBlogsController::class ,'like'] )->name("contentBlog.like");
    Route::get('/getLike/{id}',[ContentBlogsController::class ,'getLike'] )->name("getLike");
    // frontsite Starred Projects page
    Route::get('/starredProjects',[StarredProjectsController::class ,'index'])->name("starredProjects.index");
    // frontsite Service Request pages
    Route::get('/serviceRequest',[ServiceRequestsController::class ,'create'])->name("servicRequest.create");
    Route::post('/serviceRequest',[ServiceRequestsController::class ,'store'])->name("servicRequest.store");
    // frontsite message pages
    Route::get('/message',[MessagesController::class ,'create'])->name("message.create");
    Route::post('/message',[MessagesController::class ,'store'])->name("message.store");
    // frontsite about page
    Route::get('/about',[HomeController::class ,'about'])->name("about");
    //
    Route::resource('product',ProductsController::class)->only('index','show');

});
Route::get('/test', function () {
    return view('front_site.products.show');
});