@extends('layouts.main')

@section('title', 'Page Title')


@section('content')




<h1>  </h1>



      


<form action="/show_reg_save" method ="post" class = "form-inline">

 <div class="panel panel-default">
  <div class="panel-body">
    <h3><b>ข้อมูลนักศึกษา</b></h3>
  </div>
</div><br><br>

 
 <div class="container-fluid">
  
                    <div class="row">
                       <div class="col-md-2">  <label for="mojor_id"><b> mojor_id</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="mojor_id">  </div>
                      
                    </div> <br><br>

                    <!--1/\ /*********************************************************************\ -->
                
                    <div class="row">
                       <div class="col-md-2">  <label for="mojor_code"><b> mojor_code</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="mojor_code">  </div>
                      
                    </div> <br><br>

                    <!--2/\ /*********************************************************************\ -->

                        <div class="row">
                       <div class="col-md-2">  <label for="mojor_name"><b> mojor_name</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="mojor_name" >  </div>
                      
                    </div> <br><br>

                    <!--3/\ /*********************************************************************\ -->

                          <div class="row">
                       <div class="col-md-2">  <label for="mojor_info"><b> mojor_info</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="mojor_info" >  </div>
                      
                    </div> <br><br>
                      

                    <!--4/\ /*********************************************************************\ -->

                    
                    <div class="row">
                            <div class="col-md-12">    <button type="submit" class="btn btn-success"><span class ="glyphicon glyphicon-ok">บันทึก</span></button>&emsp;&emsp;
                                                      <a href = "/co_mojor" class="btn btn-danger" >  <span class ="glyphicon glyphicon-remove" >ยกเลิก</span></a>

 

                             </div>
                       <!-- <div class="col-md-10">   </div> -->
                      
                    </div> 
                     
                   
                    <!--Last/\ /*********************************************************************\ -->
                    </div>

                                   
                           

                                   
                                      
                                      
                                     
                                      
                                   
                                  
   
      
  
</div>
 






@endsection