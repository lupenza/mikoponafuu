<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\Management\PermissionController;
use App\Http\Controllers\Management\RoleController;
use App\Http\Controllers\Management\CompanyController;
use App\Http\Controllers\Management\ProductController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('loan/services',[HomeController::class,'loanOffered'])->name('mortgage.loans');
Route::get('login',[HomeController::class,'loginForm'])->name('login');
Route::post('authentication',[LoginController::class,'authentication'])->name('authentication');

Route::group(['middleware'=>['auth']],function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
    
    Route::resources([
        'users'          =>UserController::class,
        'roles'          =>RoleController::class,
        'permissions'    =>PermissionController::class,
        'companies'      =>CompanyController::class,
        'products'      =>ProductController::class,
       ]);
});


