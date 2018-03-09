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
            $password = $request->input('password');


             $checkbox1 = $request->input('checkbox1');
             $checkbox2 = $request->input('checkbox2');
       

             $radio = $request->input('radio');
        

        $hidden = $request->input('hidden');
        //return "ID : ".$hidden."<br>"."ชื่อ : ".$name."<br>"."เพศ : ".$radio."<br>"."อายุ : ".$checkbox1.$checkbox2;
   
   $array = [

    "NAME" =>$name,
    "ID"=>$hidden,
    "SEX"=>$radio,
    "AGE"=>$checkbox1.$checkbox2,
    "PASSWORD"=>$password


   ];   

   return view('page.page1',$array);
   
    }



    public function show_p3 (Request $request)
    {

        $namep3 = $request->input('name_p3');
        $passwordp3 = $request->input('password_p3');
        $selectp3 = $request->input('select_p3');
        $Textareap3 = $request->input('Textareap3');

        $array2 = [

            "NAMEP" =>$namep3,
            "PASSWORDP"=>$passwordp3,
            "SELECTP"=>$selectp3,
            "TEXTAREAP"=>$Textareap3
        
        
           ];   
        



        return view('page.page11',$array2);
    }
}