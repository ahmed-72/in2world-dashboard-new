<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContentBlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupMembersController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\ServiceRequestsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StarredProjectsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
*  Dashboard Routes
*/

Route::middleware('auth')->group(function(){ 
    // dashboard home page 
    Route::get('/', [DashboardController::class ,'index'])->name('dashboard.home');
        // select what appears in site
        Route::post('/servicesStore',[ServicesController::class,'addToHome'])->name('services.store'); 
        Route::post('/starredProjectsStore',[StarredProjectsController::class,'addToHome'])->name('starredProjects.store');
        Route::post('/clientsStore',[ClientController::class,'addToHome'])->name('clients.store');
        Route::post('/contentBlogs',[ContentBlogsController::class,'addToHome'])->name('contentBlogs.store');
        Route::post('/partnersStore',[PartnersController::class,'addToHome'])->name('partners.store');
        // Add new items to our site & update &delete them
        //services
        Route::name('service.')->group(function () {
          Route::post('/service',[ServicesController::class,'store'])->name('store');
          Route::put('/updateService',[ServicesController::class,'update'])->name('update'); 
          Route::get('/deleteService/{id}',[ServicesController::class,'destroy'])->name('delete');
        }); 
        //starredProjects 
        Route::name('starredProject.')->group(function () {
          Route::post('/starredProject',[StarredProjectsController::class,'store'])->name('store');
          Route::put('/updatestarredProject',[StarredProjectsController::class,'update'])->name('update');
          Route::get('/deletestarredProject/{id}',[StarredProjectsController::class,'destroy'])->name('delete');
        }); 
        //clients
        Route::name('client.')->group(function () {
          Route::post('/client',[ClientController::class,'store'])->name('store');
          Route::put('/updateClient',[ClientController::class,'update'])->name('update');
          Route::get('/deleteClient/{id}',[ClientController::class,'destroy'])->name('delete'); 
        });
        //contentBlogs
        Route::name('contentBlog.')->group(function () {
          Route::get('/contentBlog',[ContentBlogsController::class,'create'])->name('create');
          Route::post('/contentBlog',[ContentBlogsController::class,'store'])->name('store');
          Route::put('/updatecontentBlog',[ContentBlogsController::class,'update'])->name('update'); 
          Route::get('/deletecontentBlog/{id}',[ContentBlogsController::class,'destroy'])->name('delete');
        }); 
        //partners
        Route::name('partner.')->group(function () {
          Route::post('/partner',[PartnersController::class,'store'])->name('store');
          Route::put('/updatePartner',[PartnersController::class,'update'])->name('update');
          Route::get('/deletePartner/{id}',[PartnersController::class,'destroy'])->name('delete');  
        });


 
    // dashboard User & User Roles pages
    Route::resource('user', UsersController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('roleUsers', RoleUserController::class);
    Route::put('/reset_password/{id}',[UsersController::class,'resetPassword'])->name('user.resetPassword');

    // dashboard messages page
    Route::get('/messages',[MessagesController::class,'index'])->name('dashboard.messages');
    Route::post('/replyMessageStore',[MessagesController::class,'replyStore'])->name('replyMessage.store');
    Route::post('/serviceRequestReplyStore',[ServiceRequestsController::class,'replyStore'])->name('serviceRequestReply.store');
    // dashboard groups page
    Route::resource('group', GroupsController::class);
    Route::post('/groupReplyStore',[GroupsController::class,'replyStore'])->name('group.replyStore');
    Route::get('/groupDelete/{id}',[GroupsController::class,'destroy'])->name('group.delete'); 
    Route::get('/memberDelete/{group_id}/{member_id}',[GroupMembersController::class,'destroy'])->name('member.delete'); 

    Route::resource('product',ProductsController::class)->except('index','show');
});