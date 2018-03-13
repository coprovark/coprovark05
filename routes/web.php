<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return view('hello');
});


// Route::get('/Me1234', function () {
//     return view('It_me');
// });


// Route::get('/main1234', function () {
//     return view('layouts.main');
// });

// Route::get('/page1', function () {
//     $array = [

//         "NAME" =>"",
//         "ID"=>"",
//         "SEX"=>"",
//         "AGE"=>"",
//         "PASSWORD"=>""
    
//        ];
//     return view('page.page1',$array);
// });
// Route::get('/page2', function () {
//     return view('page.page2');
// });
// Route::get('/page3', function () {
//     return view('page.page3');
// });

// Route::get('/page4', function () {
//     return view('page.page4');
// });



Route::post('/page','PageController@show');


Route::get('/page10/{ID}', function ($id) {

    $array = [
        "ID" => $id
 


    ];
    return view('page.page10',$array);
});


Route::get('/page11', function () {
    $array2 = [

        "NAMEP" =>"",
        "PASSWORDP"=>"",
        "SELECTP"=>"",
        "TEXTAREAP"=>""
    
       ];
    return view('page.page11',$array2);
});

Route::post('/page11','PageController@show_p3');



Route::get('/form_register', function () {
    return view('page.form_register');
});


Route::get('/form_login', function () {

        
        $data = [
            'users' => []
            
                ];
    return view('page.form_login',  $arraylogin);
});


Route::post('/loginpage01','PageController@loginback');

//--------------------------------------------------------------

 Route::get('/form_login', function () {
    $data = ['users' => []    ];

    return view('page.form_login',$data);
 });

Route::post('/form_login','PageController@loginback');



//***************************************** */

Route::get('/form_login2', function () {
    $data2 = ['username' => '' ,
              'name' =>''    ];

    return view('page.form_login',$data2);
 });

Route::post('/form_login2','PageController@loginback2');

// -*-*-*-*-*-*-*-*-*-*-*-*-*--**-*-*
Route::get('/list_users', function () {
   
              return view('page.list_users');
            });
Route::get('/list_users','UsersController@list_users' );






Route::get('delete_user/{id}', function ($id) {
    return 'User ='.$id;
});
Route::get('delete_user/{id}','UsersController@delete_users' );


Route::post('form_register_save','UsersController@form_register_save' );

Route::get('/list_users','UsersController@list_users' );
Route::post('/list_users_find','UsersController@list_users_find' );