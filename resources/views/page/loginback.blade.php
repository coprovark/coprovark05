@extends('layouts.main')

@section('title', 'Page Title')


@section('content')



<form class="form-inline" action="/loginback" method="post">
   <div class="container-fluid">

         
                    <div class="row">
                       <div class="col-md-1"> </div>
                       <div class="col-md-5"> <label for="exampleName">Username</label> <input type="text" class="form-control"  name="userlogin" placeholder="Username">  </div>
                       
                       <div class="col-md-6"></div>
                    </div> <br><br>
                               

                     <div class="row">
                       <div class="col-md-1"> </div>
                       <div class="col-md-5"> <label for="exampleName">Password</label> <input type="password" class="form-control"  name="passwordlogin" placeholder="Password"> </div>
                       <div class="col-md-3">   </div>
                       <div class="col-md-6"> </div>
                    </div> <br><br><br>

                    <div class="row">
                       <div class="col-md-2"> </div>
                       <div class="col-md-1"><button type="submit" class="btn btn-default">Login</button>   </div>
                        
                       <div class="col-md-9"> </div>
                    </div>

                                   
                           

                                   
                                      
                                      
                                     
                                      
                                   
                                  
   
         </div> 
   </form>
   
  @foreach ($users as $user) 
  {{$user->username}}
  @endforeach

@endsection
                   


