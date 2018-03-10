@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
   
<form action="/page11" method="post">
    

    
     
     ชื่อ : <input type="text" name="name_p3"> 
     รหัส : <input type="password" name="password_p3"> 
     คือ : <select name="select_p3"> 
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            </select>    <br>

            <textarea name="textarea_p3"></textarea>
 
     <input type="submit" value="ส่งค่า">
 


@endsection