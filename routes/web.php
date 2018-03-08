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


Route::get('/Me1234', function () {
    return view('It_me');
});


Route::get('/main1234', function () {
    return view('layouts.main');
});

Route::get('/page1', function () {
    $array = [

        "NAME" =>"",
        "ID"=>"",
        "SEX"=>"",
        "AGE"=>""
    
       ];
    return view('page.page1',$array);
});
Route::get('/page2', function () {
    return view('page.page2');
});
Route::get('/page3', function () {
    return view('page.page3');
});

Route::get('/page4', function () {
    return view('page.page4');
});



Route::post('/page','PageController@show');


Route::get('/page10/{ID}', function ($id) {

    $array = [
        "ID" => $id



    ];
    return view('page.page10',$array);
});
