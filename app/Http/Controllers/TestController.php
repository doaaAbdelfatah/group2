<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(){
        echo "Test";
    }
    function sum(Request $request){
        $x = (empty($request->x))?0:$request->x;
        $y = (empty($request->y))?0:$request->y;
        
        echo "$x + $y = " . ($x +$y);
    }
    function show(){   
          
        //data from db
        // return view("test" ,["name"=>"Doaa" ,"age"=>35]);
        $name ="xxx";
        $empAge= 35;
        return view("test")->with(compact("name"))->with("age" ,$empAge);
    }
    function hello(Request $request){
        //action
        // dd($request->lname);
        echo "<h2>Helloooo ". $request->fname ." " . $request->mname ." " .$request->lname. "</h2>";
    }

    function xxx()
    {
        //code 
        return view ("contacts" ,["dept"=>"Sections" ,"data"=>"Please Enter Your Information"]);
        
    }
}
