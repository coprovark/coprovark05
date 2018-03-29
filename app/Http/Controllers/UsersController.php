<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list_users() //แสดง
    {

        $find ='';
        $users = DB::table('users')
        ->select('*')
        ->get();
       return view('page.list_users',['datalist'=>$users,
                                      'find'=>$find]);
    }

    public function list_users_find(Request $sc)  //ค้นหา
    {
        $find =$sc ->find;
        $users = DB::table('users')
                     ->select('*')
                     ->where('id','=',$find)
                     ->get();
       return view('page.list_users',['datalist'=>$users,
                                      'find'=>$find]);
        
    }
    

    public function delete_users($id){

        DB::table('users')->where('id', '=', $id)->delete();
       
        return redirect('list_users');


    }


    public function form_register_save(Request $register){

       $status = DB::table('users')->insert(
        [
          'id'      => $register->ID,
          'username'=> $register->USERNAME,
          'password'=> $register->PASSWORD,
          'status'  => $register->STATUS
        ]
      );

       
      return redirect('list_users');


    }

    public function show_reg_save(Request $register){

        
                 $register->L_food1 +=0;
           
        
                 $register->L_food2 +=0;
            
       
                 $register->L_food3 +=0;
            
        
                 $register->L_food4 +=0;
            
       
      
if ($register->ID_S!="" and $register->On_name!="" and $register->Nameands_S!="" and $register->Gender_S!="" and $register->Date_S!="" and $register->Fac_S!="" and $register->major_s!="" and $register->Address_S!="" and $register->Number_S!="" and $register->User_S!="" and $register->Password_S!=""){
        $status = DB::table('coprovark_05')->insert(
         [
           'sid'        => $register->ID_S,
           'titleName'  => $register->On_name,
           'fullName'   => $register->Nameands_S,
           'gender'     => $register->Gender_S,
           'birthDay'   => $register->Date_S,
           'facultyID'  => $register->Fac_S,
           'majorID'    => $register->major_s,
           'address'    => $register->Address_S,
           'mobile'     => $register->Number_S,
           'food1'      => $register->L_food1,
           'food2'      => $register->L_food2,
           'food3'      => $register->L_food3,
           'food4'      => $register->L_food4,           
           'username'   => $register->User_S,
           'password'   => $register->Password_S
         ]
       );		
       
    }
    else{

        return redirect('show_reg');
    }

        
       return redirect('show_list');
 
 
     }


     public function show_list_u() //แสดง
     {
 
         $find ='';
         $users = DB::table('coprovark_05')
         ->select('*')
         ->get();
        return view('page.show_list',['datalist'=>$users,
                                       'find'=>$find]);
     }
 
     public function show_list_u_find(Request $sc)  //ค้นหา
     {
         $find =$sc ->find;
         $users = DB::table('coprovark_05')
                      ->select('*')
                      ->where('sid','LIKE','%'.$find.'%')
                      ->get();
        return view('page.show_list',['datalist'=>$users,
                                       'find'=>$find]);
         
     }
     
 
     public function show_list_delete_users($sid){
 
         DB::table('coprovark_05')->where('sid', '=', $sid)->delete();
        
         return redirect('show_list');
 
 
     }


    //แก้ไข user
    public function list_user_edit(Request $req){
        $find = $req->id;
        $user = DB::table('coprovark_05')
                         ->select('*')
                         ->where('id','=',$find)
                         ->get();
        return view('page.show_edit',[
                'user'=>$user
        ]);
    }

    public function list_user_update(Request $req1){
       
        $user_code      = $req1->user_code;
        $user_name      = $req1->user_name;
        $user_password  = $req1->user_password;
        $data = [
            'username'=>$user_name,
            'password'=>$user_password,
        ];
        $status = DB::table('coprovark_05')
                    ->where('sid', $user_code)
                    ->update($data);
        return redirect('show_list');
    }

    


    public function M_co_save(Request $register){

       
$status = DB::table('resume')->insert(
[
  ''        => $register->ID_S,
  'titleName'  => $register->On_name,
  'fullName'   => $register->Nameands_S,
  'gender'     => $register->Gender_S,
  'birthDay'   => $register->Date_S,
  'facultyID'  => $register->Fac_S,
  'majorID'    => $register->major_s,
  'address'    => $register->Address_S,
  'mobile'     => $register->Number_S,
  'food1'      => $register->L_food1,
  'food2'      => $register->L_food2,
  'food3'      => $register->L_food3,
  'food4'      => $register->L_food4,           
  'username'   => $register->User_S,
  'password'   => $register->Password_S
]);		


return redirect('show_list');


        }


}





