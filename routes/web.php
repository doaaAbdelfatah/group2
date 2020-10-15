<?php

use App\Http\Controllers\BrandControler;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

Route::resource("/category" ,CategoryController::class); 
// 7 routes (index ,create ,store,show,edit,update,destory)

// Route::resource("/category" ,CategoryController::class)->only(["index" ,"create" ,"store"]);
// 3 routes  (index ,create ,store)

// Route::resource("/category" ,CategoryController::class)->except(["show","edit","update"]);
// 4 routes  (index ,create ,store ,destory)

Route::resource("/product" ,ProductController::class); 

Route::resource("/supplier" ,SupplierController::class); 
Route::resource("/contact_types" ,ContactController::class); 
// Route::resource("/contact" ,ContactController::class); 

Route::prefix("/contact")->group(function(){
    Route::get("create/{id}/{type}" ,[ContactController::class ,"create"]);
    Route::post("{id}/{type}" ,[ContactController::class ,"store"]);
});


Route::view("/users" ,"users")->name("user.index");

Route::post("/lang" ,function (Request $request){
    // if($request->l =="ar")
    // {
        // App::setLocale("ar");
    // }else App::setLocale("en");

    // echo __("messages.Brand");
//    var_dump($request->l);
    session()->put("locale" ,$request->l);
    
    return redirect()->back();
});