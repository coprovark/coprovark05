@extends('layouts.main')

@section('title', 'Page Title')


@section('content')

<h5>เข้าสู่ระบบ </h5> <br> <br>

<form class="form-inline">
                                <div class="form-group">
                                        <label for="exampleName">ชื่อสกุล</label>
                                        
                                      <input type="text" class="form-control"  id="exampleuser" placeholder="Username"> <br><br>
                                      
                                      
                                      <input type="password" class="form-control"  id="examplepassword" placeholder="Password"> <br><br>
                                      
                                   
                                   
                                    </div>
                                    </form>






@endsection