<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
 



    public function show (Request $request)
    {

            $name = $request->input('name');
    


             $checkbox1 = $request->input('checkbox1');
             $checkbox2 = $request->input('checkbox2');
       

             $radio = $request->input('radio');
        

        $hidden = $request->input('hidden');
        //return "ID : ".$hidden."<br>"."ชื่อ : ".$name."<br>"."เพศ : ".$radio."<br>"."อายุ : ".$checkbox1.$checkbox2;
   
   $array = [

    "NAME" =>$name,
    "ID"=>$hidden,
    "SEX"=>$radio,
    "AGE"=>$checkbox1.$checkbox2


   ];   

   return view('page.page1',$array);
   
    }
}