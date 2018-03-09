@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
    <p>This is my body content.</p>
       <h1>this is sapahee </h1> 

<form action="/page" method="post">
    

   อายุ : <input type="checkbox" name="checkbox1" value="10">10 ปี
    <input type="checkbox" name="checkbox2" value="20">20 ปี <br> 

    เพศ : <input type="radio" name="radio" value="ชาย">ชาย
    <input type="radio" name="radio" value="หญิง">หญิง <br>
    
    
    ชื่อ : <input type="text" name="name"> 
    รหัส : <input type="password" name="password"> 
    <input type="hidden" name="hidden" value="1001"> <br>

    <input type="submit" value="ส่งค่า">





</form>

<h2>แสดงค่า</h2>
ชื่อ = {{ $NAME }} 
รหัส = {{ $PASSWORD }} 
ID = {{ $ID}} 
เพศ = {{ $SEX }} 
อายุ = {{ $AGE }} 



@endsection