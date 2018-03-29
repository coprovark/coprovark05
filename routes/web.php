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


// --HomeWork01-19/3/61 Sc--

Route::get('/show_reg', function () { return view('page.show_reg');  });

Route::post('show_reg_save','UsersController@show_reg_save' );

Route::get('/show_list','UsersController@show_list_u' );

 Route::get('show_delete_user/{sid}', function ($sid) {
    return 'User ='.$sid;
 });
Route::get('show_delete_user/{sid}','UsersController@show_list_delete_users' );

Route::post('/show_list_find','UsersController@show_list_u_find' );


Route::get('/list_user_edit/{id}','UsersController@list_user_edit');  //<<<<

Route::post('/list_user_update','UsersController@list_user_update');

// ---------work3-21/3/61----------------

Route::get('/co_list', function () { return view('page.coprovark_begin.user');  });
Route::get('/co_reg', function () { return view('page.coprovark_begin.co_reg');  });
//---user--

Route::get('/co_title', function () { return view('page.coprovark_begin.co_title');  });
Route::get('/co_title_reg', function () { return view('page.coprovark_begin.co_title_reg');  });
//---title--

Route::get('/co_status', function () { return view('page.coprovark_begin.co_status');  });
Route::get('/co_status_reg', function () { return view('page.coprovark_begin.co_status_reg');  });
//---status--

Route::get('/co_nation', function () { return view('page.coprovark_begin.co_nation');  });
Route::get('/co_nation_reg', function () { return view('page.coprovark_begin.co_nation_reg');  });
//---nation--

Route::get('/co_race', function () { return view('page.coprovark_begin.co_race');  });
Route::get('/co_race_reg', function () { return view('page.coprovark_begin.co_race_reg');  });
//---race--

Route::get('/co_religion', function () { return view('page.coprovark_begin.co_religion');  });
Route::get('/co_religion_reg', function () { return view('page.coprovark_begin.co_religion_reg');  });
//---religion--

Route::get('/co_category', function () { return view('page.coprovark_begin.co_category');  });
Route::get('/co_category_reg', function () { return view('page.coprovark_begin.co_category_reg');  });
//---category--

Route::get('/co_faculty', function () { return view('page.coprovark_begin.co_faculty');  });
Route::get('/co_faculty_reg', function () { return view('page.coprovark_begin.co_faculty_reg');  });
//---faculty--

Route::get('/co_mojor', function () { return view('page.coprovark_begin.co_mojor');  });
Route::get('/co_mojor_reg', function () { return view('page.coprovark_begin.co_mojor_reg');  });
//---mojor--

Route::get('/co_institute', function () { return view('page.coprovark_begin.co_institute');  });
Route::get('/co_institute_reg', function () { return view('page.coprovark_begin.co_institute_reg');  });
//---institute--

Route::get('/M_co_resume', function () { return view('page.coprovark_begin.M_co_resume');  });

Route::post('/M_co_save','UsersController@M_co_save' );



//------Upload File-----------------------------------------
// Route::get('/upload1', function () {
//     return view('file.upload');
// });
Route::get('/upload1','FileController@show');
Route::post('/upload1','FileController@upload');//upload
Route::get('/dl/{path}/{name}','FileController@dl');//download
Route::get('/rm/{ID}','FileController@rm');//ddelete

Route::get('/ed/{ID}','FileController@ed');//edit_pic
Route::post('/update_ed','FileController@upload_ed');//update--edit