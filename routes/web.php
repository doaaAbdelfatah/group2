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
// Route::view("/contacts" ,"contacts" ,["dept"=>"Sections" ,"data"=>"Please Enter Your Information"]);
Route::get("/contacts" , [TestController::class ,"xxx"]);
Route::get("/hello/{fname}/{mname}/{lname?}" ,[TestController::class ,"hello"])->where(["fname"=>"[a-zA-Z]+" ,"mname"=>"[a-z]+"  , "lname"=>"[a-z]+"]);
Route::get("/show" ,[TestController::class ,"show"] );
// Route::get("/show" ,"App\Http\Controllers\TestController@show" );
// Route::get("/sum/{x?}/{y?}" ,[TestController::class ,"sum"] )->where("x","[0-9]+")->where("y","[0-9]+");
Route::get("/sum/{x?}/{y?}" ,[TestController::class ,"sum"] )->where(["x"=>"[0-9]+" , "y"=>"[0-9]+"]);
Route::get("/aaa" ,[TestController::class ,"test"]);

Route::view("/brand" ,"brands.index");
Route::post("/brand" ,[BrandControler::class ,"store"]);