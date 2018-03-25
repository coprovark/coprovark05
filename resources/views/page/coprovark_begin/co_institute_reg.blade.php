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
                       <div class="col-md-2">  <label for="institute_id"><b> institute_id</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="institute_id">  </div>
                      
                    </div> <br><br>

                    <!--1/\ /*********************************************************************\ -->
                
                    <div class="row">
                       <div class="col-md-2">  <label for="institute_code"><b> institute_code</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="institute_code">  </div>
                      
                    </div> <br><br>

                    <!--2/\ /*********************************************************************\ -->

                        <div class="row">
                       <div class="col-md-2">  <label for="institute_name"><b> institute_name</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="institute_name" >  </div>
                      
                    </div> <br><br>

                    <!--3/\ /*********************************************************************\ -->

                          <div class="row">
                       <div class="col-md-2">  <label for="institute_info"><b> institute_info</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="institute_info" >  </div>
                      
                    </div> <br><br>
                      

                    <!--4/\ /*********************************************************************\ -->

                     <div class="row">
                       <div class="col-md-2">  <label for="institute_coutry"><b> institute_coutry</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="institute_coutry" >  </div>
                      
                    </div> <br><br>
                      

                    <!--4/\ /*********************************************************************\ -->
                    
                    <div class="row">
                            <div class="col-md-12">    <button type="submit" class="btn btn-success"><span class ="glyphicon glyphicon-ok">บันทึก</span></button>&emsp;&emsp;
                                                      <a href = "/co_institute" class="btn btn-danger" >  <span class ="glyphicon glyphicon-remove" >ยกเลิก</span></a>

 

                             </div>
                       <!-- <div class="col-md-10">   </div> -->
                      
                    </div> 
                     
                   
                    <!--Last/\ /*********************************************************************\ -->
                    </div>

                                   
                           

                                   
                                      
                                      
                                     
                                      
                                   
                                  
   
      
  
</div>
 






@endsection