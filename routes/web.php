<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::view('/welcome', 'welcome');

Route::get('foo', function () {
    return 'Hello World';
});
Route::redirect('/here', '/there', 301);


Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
*/



Route::get('firoz', function () {
    return view('home');
});














/***Cycle:browser->route->index method->PagesControllers'index method
->views' index->extends master ***/

Route::get('/', [PagesController::class, 'index'])->name('index');
    

/***Cycle:browser->route->product method->PagesControllers'product method
->pages->products->index***/

Route::get('/products', [PagesController::class, 'products'])->name('products');


/***Cycle:browser->route->all_products method->PagesControllers'all_products method
->pages->products->all_products***/

Route::get('/all_products', [PagesController::class, 'all_products'])->name('all_products');


/***Cycle:browser->route->welcome method->PagesControllers'welcome method
->pages->welcome***/

Route::get('/welcome', [PagesController::class, 'welcome'])->name('welcome');


/***Cycle:browser->route->contact method->PagesControllers'contact method
->pages->contact->index***/

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/category', [CategoryController::class, 'category'])->name('category');


Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/post', [PagesController::class, 'post'])->name('post');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
