<?php

use App\Http\Controllers\ActuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MoncompteController;
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



require __DIR__.'/auth.php';
/***********************************
 * Route pour accéder au dashboard *
 ***********************************/
Route::get("/admin",[DashboardController::class,"index"])
->middleware(['auth'])->name("dashboard");

/************************************
 * Route pour accéder à mon compte  * 
 ************************************/
Route::get("/moncompte",[MoncompteController::class,"index"])->name("moncompte");

Route::get("/panier",[MoncompteController::class,"panier"])->name("monpanier");

/*************************
 * Administratioin user  *
 *************************/
Route::get("/admin/user",[UserController::class,"index"])->middleware(["auth"])->name("admin-user");

/***********************
 * Administration Actu *
 ***********************/
Route::get("/admin/actu-lister",[ActuController::class,"index"])->middleware(["auth"])->name("admin-actu-lister");

/******************************
 * Administration Actu-Editer *
 ******************************/
Route::get("/admin/actu-editer",[ActuController::class,"editer"])->middleware(["auth"])->name("admin-actu-editer");


 