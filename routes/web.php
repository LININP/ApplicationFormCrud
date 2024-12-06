<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LoginController;

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

Route::get('application/index',[ApplicationController::class,'index'])->name('viewform');

Route::post('application/store',[ApplicationController::class,'store'])->name('storedatas');

Route::get('admin/index',[LoginController::class,'login'])->name('loginpge');

Route::get('admin/dashboard',[ApplicationController::class,'dashboard'])->name('dashboardpage');

Route::get('admin/viewapplicants',[ApplicationController::class,'viewapplicnt'])->name('viewapplicntpage');

Route::get('admin/allapplicants',[ApplicationController::class,'allapplicants'])->name('allapplicntpage');

Route::get('admin/{application}/edit',[ApplicationController::class,'edit'])->name('edit_application');

Route::put('admin/{application}/update',[ApplicationController::class,'update'])->name('updated_application');

Route::delete('admin/{application}/delete',[ApplicationController::class,'delete'])->name('deleted_application');
