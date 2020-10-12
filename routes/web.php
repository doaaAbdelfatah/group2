<?php

use App\Http\Controllers\BrandControler;
use App\Http\Controllers\TestController;
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


Route::view("/" ,"welcome");
Route::view("/home" ,"home");
Route::view("/contacts" ,"contacts");

Route::get("/brand" ,[BrandControler::class ,"index"])->name("brand");
Route::get("/brand/delete/{id}" ,[BrandControler::class ,"delete"])->name("brand_delete");
Route::get("/brand/edit/{id}" ,[BrandControler::class ,"edit"])->name("brand_edit");
Route::post("/brand/edit/{id}" ,[BrandControler::class ,"update"]);
Route::post("/brand" ,[BrandControler::class ,"store"]);