<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestomonialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\admin\NoticeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/',[PagesController::class,'welcome'])->name('welcome');
Route::get('/about',[PagesController::class,'about'])->name('about');




Route::middleware('auth')->group(function () {



    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/send/mail',[DashboardController::class,'sendMail'])->name('send.mail');






    Route::get('/notice',[NoticeController::class,'index'])->name('admin.notice.index');
    Route::get('/notice/create',[NoticeController::class,'create'])->name('admin.notice.create');
    Route::post('/notice/store',[NoticeController::class,'store'])->name('admin.notice.store');
    Route::get('/notice/{id}/edit',[NoticeController::class,'edit'])->name('admin.notice.edit');
    Route::post('/notice/{id}/update',[NoticeController::class,'update'])->name('admin.notice.update');
    Route::delete('/notice/destroy',[NoticeController::class,'destroy'])->name('admin.notice.destroy');

    Route::get('/client',[ClientController::class,'index'])->name('admin.client.index');
    Route::get('/client/create',[ClientController::class,'create'])->name('admin.client.create');
    Route::post('/client/store',[ClientController::class,'store'])->name('admin.client.store');
    Route::get('/client/{id}/edit',[ClientController::class,'edit'])->name('admin.client.edit');
    Route::post('/client/{id}/update',[ClientController::class,'update'])->name('admin.client.update');
    Route::delete('/client/destroy',[ClientController::class,'destroy'])->name('admin.client.destroy');


    Route::get('/testomonial',[TestomonialController::class,'index'])->name('admin.testomonial.index');
    Route::get('/testomonial/create',[TestomonialController::class,'create'])->name('admin.testomonial.create');
    Route::post('/testomonial/store',[TestomonialController::class,'store'])->name('admin.testomonial.store');
    Route::get('/testomonial/{id}/edit',[TestomonialController::class,'edit'])->name('admin.testomonial.edit');
    Route::post('/testomonial/{id}/update',[TestomonialController::class,'update'])->name('admin.testomonial.update');
    Route::delete('/testomonial/destroy',[TestomonialController::class,'destroy'])->name('admin.testomonial.destroy');

    Route::get('/team',[TeamController::class,'index'])->name('admin.team.index');
    Route::get('/team/create',[TeamController::class,'create'])->name('admin.team.create');
    Route::post('/team/store',[TeamController::class,'store'])->name('admin.team.store');
    Route::get('/team/{id}/edit',[TeamController::class,'edit'])->name('admin.team.edit');
    Route::post('/team/{id}/update',[TeamController::class,'update'])->name('admin.team.update');
    Route::delete('/team/destroy',[TeamController::class,'destroy'])->name('admin.team.destroy');


    Route::get('/project',[ProjectController::class,'index'])->name('admin.project.index');
    Route::get('/project/create',[ProjectController::class,'create'])->name('admin.project.create');
    Route::post('/project/store',[ProjectController::class,'store'])->name('admin.project.store');
    Route::get('/project/{id}/edit',[ProjectController::class,'edit'])->name('admin.project.edit');
    Route::post('/project/{id}/update',[ProjectController::class,'update'])->name('admin.project.update');
    Route::delete('/project/destroy',[ProjectController::class,'destroy'])->name('admin.project.destroy');


    Route::get('/blog',[BlogController::class,'index'])->name('admin.blog.index');
    Route::get('/blog/create',[BlogController::class,'create'])->name('admin.blog.create');
    Route::post('/blog/store',[BlogController::class,'store'])->name('admin.blog.store');
    Route::get('/blog/{id}/edit',[BlogController::class,'edit'])->name('admin.blog.edit');
    Route::post('/blog/{id}/update',[BlogController::class,'update'])->name('admin.blog.update');
    Route::delete('/blog/destroy',[BlogController::class,'destroy'])->name('admin.blog.destroy');


    Route::get('/banner',[BannerController::class,'index'])->name('admin.banner.index');
    Route::get('/banner/create',[BannerController::class,'create'])->name('admin.banner.create');
    Route::post('/banner/store',[BannerController::class,'store'])->name('admin.banner.store');
    Route::get('/banner/{id}/edit',[BannerController::class,'edit'])->name('admin.banner.edit');
    Route::post('/banner/{id}/update',[BannerController::class,'update'])->name('admin.banner.update');
    Route::get('/banner/{id}/destroy',[BannerController::class,'destroy'])->name('admin.banner.destroy');

    Route::get('/category',[CategoryController::class,'index'])->name('admin.category.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('admin.category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('admin.category.store');
    Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('admin.category.edit');
    Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('admin.category.destroy');

    Route::get('/product',[ProductController::class,'index'])->name('admin.product.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('admin.product.create');
    Route::post('/product/store',[ProductController::class,'store'])->name('admin.product.store');
    Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('admin.product.edit');
    Route::delete('/product/destroy',[ProductController::class,'destroy'])->name('admin.product.destroy');

    Route::get('/contacts',[ContactController::class,'index'])->name('admin.contacts.index');
    Route::delete('/contacts/destroy',[ContactController::class,'destroy'])->name('admin.contacts.destroy');













    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/contacts', [ContactController::class,'store'])->name('admin.contacts');
Route::post('/contact/store',[ContactController::class,'store'])->name('admin.contact.store');


Route::get('/welcome',[PagesController::class,'welcome'])->name('welcome');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');
Route::get('/projects',[PagesController::class,'projects'])->name('projects');
Route::get('/blogs',[PagesController::class,'blogs'])->name('blogs');
Route::get('/products',[PagesController::class,'products'])->name('products');

Route::get('/viewblogs/{id}',[PagesController::class,'viewblogs'])->name('viewblogs');












require __DIR__.'/auth.php';
