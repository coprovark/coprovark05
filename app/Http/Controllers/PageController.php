<?php

namespace App\Http\Controllers;

use App\Page;
use App\loginpage01;
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



    public function show_p3 (Request $request1)
    {

        $namep3 = $request1->input('name_p3');
        $passwordp3 = $request1->input('password_p3');
        $selectp3 = $request1->input('select_p3');
        $Textareap3 = $request1->input('textarea_p3');

        $array2 = [

            "NAMEP" =>$namep3,
            "PASSWORDP"=>$passwordp3,
            "SELECTP"=>$selectp3,
            "TEXTAREAP"=>$Textareap3
        
        
           ];   
        



        return view('page.page11',$array2);
 
    }


    public function loginback (Request $gologin)
    {

        $nameloginay = $gologin->input('userlogin');
        $passwordloginay = $gologin->input('passwordlogin');

         $arraylogin = [

           "loginserve1" =>$nameloginay,
           
            
             
           ];   
        


        if($nameloginay=="watercat"&& $passwordloginay=="123456789"){

            $loginserve="True";

           



        }
        else{

            $loginserve="false";



        }

     
        $arraylogin = [

            "loginserve1" => $loginserve          
             
              
            ];  
            
            
        return view('page.form_login',$arraylogin);
       



        
 
    }























}