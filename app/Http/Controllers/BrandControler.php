<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandControler extends Controller
{
    function store(Request $request){
        
        // validate
        $request->validate([
            "name" => "required|min:3|max:100",
            "info" => "nullable|min:3|max:100",
        ]);

        // $name =$request->name;
        // $rslt =DB::insert("insert into brands(name)values('$name')");
        // $rslt =DB::delete("delete from brands where id=20");
        // $rslt =DB::table("brands")->insert(["name"=>$request->name]);
        // $rslt =DB::table("brands")->insert($request->except("_token"));
        // $rslt =DB::table("brands")->where("id" ,18)->delete();
        // $rslt =DB::table("brands")->where("id" ,19)->update(["name" =>$request->name]);
        // dd($rslt);


        // dd(DB::table("brands")->get());

        //insert 
        // $brand = new Brand();
        // $brand->name =$request->name;
        // $brand->info =$request->info;
        // $brand->save();
        // dd($brand);
        //select all
        // dd(Cat::all());

        //update
        // $b = Brand::find(8);
        // $b->name = "ahmed Tea";     
        // $b->save();
        //delete
        // $b = Brand::find(9);
        // $b->delete();
        Brand::destroy([10,15,16]);
    }
}
