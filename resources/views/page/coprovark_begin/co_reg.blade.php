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
                       <div class="col-md-2">  <label for="user_code"><b> user_code</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="user_code">  </div>
                      
                    </div> <br><br>

                    <!--1/\ /*********************************************************************\ -->
                
                    <div class="row">
                       <div class="col-md-2">  <label for="user_name"><b> user_name</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="user_name">  </div>
                      
                    </div> <br><br>

                    <!--2/\ /*********************************************************************\ -->

                        <div class="row">
                       <div class="col-md-2">  <label for="user_password"><b> user_password</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="user_password" >  </div>
                      
                    </div> <br><br>

                    <!--3/\ /*********************************************************************\ -->

                        <div class="row">
                       <div class="col-md-2">  <label for="user_level"><b> user_level</b></label></div>
                       <div class="col-md-10">  <select name="user_level"  class="form-control"  >
                                              <option value = "00">--โปรดเลือก--</option> 
                                              <option value = "01" >admin</option>
                                              <option value = "02" >student</option>
                                              <option value = "03" >noob</option>
                                                </select>  </div>
                      
                    </div> <br><br>

                    <!--4/\ /*********************************************************************\ -->

                        <div class="row">
                       <div class="col-md-2">  <label for="user_code"><b> สถานะการใช้งาน</b></label></div>
                       <div class="col-md-10"> <input type="radio" name="user_enable" value="1"> on&emsp;
                                               <input type="radio" name="user_enable" value="2"> off  </div>
                      
                    </div> <br><br>

                    <!--5/\ /*********************************************************************\ -->
                
                    
                    <div class="row">
                            <div class="col-md-12">    <button type="submit" class="btn btn-success"><span class ="glyphicon glyphicon-ok">บันทึก</span></button>&emsp;&emsp;
                                                      <a href = "/co_list" class="btn btn-danger" >  <span class ="glyphicon glyphicon-remove" >ยกเลิก</span></a>

 

                             </div>
                       <!-- <div class="col-md-10">   </div> -->
                      
                    </div> 
                     
                   
                    <!--Last/\ /*********************************************************************\ -->
                    </div>

                                   
                           

                                   
                                      
                                      
                                     
                                      
                                   
                                  
   
      
  
</div>
 






@endsection