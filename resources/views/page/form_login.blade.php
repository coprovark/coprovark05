@extends('layouts.main')

@section('title', 'Page Title')


@section('content')

<h5>เข้าสู่ระบบ </h5> <br> <br>

<form class="form-inline" action="/form_login2" method="post">
   <div class="container-fluid">
  
                    <div class="row">
                       <div class="col-md-1"> </div>
                       <div class="col-md-5"> <label for="exampleName">Username</label> <input type="text" class="form-control"  name="username" placeholder="Username">  </div>
                       <div class="col-md-3">   
                         </div>
                       <div class="col-md-4"></div>
                    </div> <br><br>
                               

                     <div class="row">
                       <div class="col-md-1"> </div>
                       <div class="col-md-5"> <label for="exampleName">Password</label> <input type="password" class="form-control"  name="password" placeholder="Password"> </div>
                       <div class="col-md-3">   </div>
                       <div class="col-md-4"> </div>
                    </div> <br><br><br>

                    <div class="row">
                       <div class="col-md-2"> </div>
                       <div class="col-md-1"><button type="submit" class="btn btn-default">Login</button>   </div>
                        
                       <div class="col-md-9"> </div>
                    </div>

                                   
                           

                                   
                                      
                                      
                                     
                                      
                                   
                                  
   
         </div> 
   </form>
   

{{$username}}

{{$name}}
                   



@endsection