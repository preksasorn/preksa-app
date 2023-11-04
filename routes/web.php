<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
    Route::controller(DashboardController::class)->group(function(){
    Route::get('/Overview','Dashboards')->name('Overview');
    Route:: get('/Dashboard','Dashboards1')->name('Dashboard');
    Route:: get('/Product','Dashboards2')->name('Product');
    });

    Route::controller(UserController::class)->group(function() {
        Route::get('login', 'index')->name('login');
        Route::get('registration', 'registration')->name('registration');
        Route::get('logout', 'logout')->name('logout');
        Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');
        Route::post('validate_login', 'validate_login')->name('sample.validate_login');
        Route::get('dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(ProductController::class)->group(function(){
        Route::get('/product_create','create')->name ('product_create');
        Route::post('/product_store','store')->name ('product_store');
        Route::get('/product_index', 'index')->name('product_index');
        Route::get('/product_edit/{id}', 'edit')->name('product_edit');
        Route::post('/product_update/{id}','update')->name ('product_update');
        Route::get('/product_show/{id}','show')->name ('product_show');
        Route::get('/product_delete/{id}','destroy')->name ('product_delete');


      });
      Route::controller(PageUserController::class)->group(function(){
        Route::get('/allproduct','allproduct')->name ('allproduct');
        Route::get('/buy_watch','buy')->name ('buy_watch');
        Route::get('/homepage','home')->name ('homepage');
      });
