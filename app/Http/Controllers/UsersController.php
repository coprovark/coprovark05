<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list_users()
    {

        $find ='';
        $users = DB::table('users')->select('*')->get();
       return view('page.list_users',['datalist'=>$users,
                                      'find'=>$find]);
    }

    public function list_users_find(Request $sc)
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
}





