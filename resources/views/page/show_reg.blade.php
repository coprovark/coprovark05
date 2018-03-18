@extends('layouts.main')

@section('title', 'Page Title')


@section('content')


<!--    "E_002|--เลือกสาขา--","M_1| ","M_2| ","M_3| ","M_4| ","M_5| ","M_6| ","M_7| ","M_8| ","M_9| ","M_10| ","M_11| ","M_12| "    -->

	                                    <script>
                                              
   
                                              function  fac1(s1,s2){
                                            	var s1 = document.getElementById(s1);
	                                            var s2 = document.getElementById(s2);
                                                s2.innerHTML = "";
                                                if(s1.value == "00"){
                                                    var optionArray = ["00|โปรดเลือกคณะ"];
                                                } else if(s1.value == "01"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาการปกครองท้องถิ่น","02|สาขาภาษาจีน","03|สาขาศิลปกรรม","04|สาขาการจัดการท่องเที่ยวและบริการ","05|สาขาธุรกิจโรงแรม",
                                                    "06|สาขารัฐประศาสนศาสตร์","07|สาขาภาษาอังกฤษธุรกิจ","08|สาขาภาษาอังกฤษ","09|สาขาภาษาไทย","10|สาขาการพัฒนาชุมชน","11|สาขาดนตรี","12|สาขาบรรณารักษศาสตร์และสารนิเทศน์ศาสตร์"];
                                                } else if(s1.value == "02"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาวิทยาการคอมพิวเตอร์","02|สาขาการจัดการเทคโนโลยีสารสนเทศ","03|สาขามัลติมีเดียและแอนิเมชันเทคโนโลยี","04|สาขาวิศวกรรมซอฟต์แวร์"];
                                                } else if(s1.value == "03"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาเทคโนโลยีการจัดการอุตสาหกรรม","02|สาขาเทคโนโลยีไฟฟ้า","03|สาขาเทคโนโลยีโยธา","04|สาขาเทคโนโลยีสารสนเทศ","05|สาขาเทคโนโลยีเพื่อการออกแบบ",
                                                    "06|สาขาเทคโนโลยีคอมพิวเตอร์","07|สาขาวิศวกรรมเครือข่ายคอมพิวเตอร์","08|สาขาเทคโนโลยีอิเล็กทอรนิกส์","09|สาขาเทคโนโลยีโลจิสติกส์","10|สาขาเทคโนโลยีโทรคมนาคมและการสื่อสาร"];
                                                } else if(s1.value == "04"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาภาษาอังกฤษ","02|สาขาวิทยาศาสตร์ทั่วไป","03|สาขาคณิตศาสตร์","04|สาขาสังคมศึกษา","05|สาขาพลศึกษา","06|สาขาการประถมศึกษา",
                                                    "07|สาขาการศึกษาปฐมวัย","08|สาขาการศึกษาพิเศษและคอมพิวเตอร์","09|สาขาคอมพิวเตอร์และเทคโนโลยีการศึกษา"];
                                                }else if(s1.value == "05"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาฟิสิกส์","02|สาขาเคมี","03|สาขาชีววิทยา","04|สาขาจุลชีววิทยา","05|สาขาวิทย์ฯสิ่งแวดล้อม","06|สาขาสถิติประยุกต์","07|สาขาคณิตศาสตร์","08|สาขาเทคโนฯสิ่งแวดล้อม"];
                                                }else if(s1.value == "06"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาวิชานิเทศศาสตร์","02|สาขาวิชาการบัญชี(บช.บ)","03|สาขาวิชาการบัญชี(บธ.บ.)","04|สาขาวิชาการตลาด","05|สาขาวิชาการบริหารทรัพยากรมนุษย์",
                                                    "06|สาขาวิชาคอมพิวเตอร์ธุรกิจ","07|สาขาวิชาการจัดการทั่วไป","08|สาขาวิชาการจัดการธุรกิจระหว่างประเทศ"];
                                                } else if(s1.value == "07"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขานิติศาสตรบัณฑิต","02|สาขาศิลปศาสตรบัณฑิต"];
                                                }else if(s1.value == "08"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาการประมง","02|สาขาวิทยาศาสตร์และเทคโนโลยีการอาหาร ","03|สาขาธุรกิจอาหารและโภชนาการ ","04|สาขาสัตวศาสตร์ ","05|สาขาเกษตรศาสตร์"];
                                                } else if(s1.value == "09"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาพยาบาลศาสตร์"];
                                                } else if(s1.value == "10"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาการแพทย์แผนไทย"];
                                                }else if(s1.value == "11"){
                                                    var optionArray = ["00|--เลือกสาขา--","01|สาขาวิชาสาธารณสุขชุมชน","02|สาขาวิชาอาชีวอนามัยและความปลอดภัย"];
                                                }
                                                for(var option in optionArray){
                                                    var pair = optionArray[option].split("|");
                                                    var newOption = document.createElement("option");
                                                    newOption.value = pair[0];
                                                    newOption.innerHTML = pair[1];
                                                    s2.options.add(newOption);
                                                }
                                            }
     

                                            function date1() {
                                                var yearth = "ปี";
                                                var Q4A = "";
                                                var Bdate = document.getElementById('Date_S').value;
                                                var Bday = +new Date(Bdate);
                                                Q4A +=  ~~ ((Date.now() - Bday) / (31557600000));
                                                var theBday = document.getElementById('FBday');
                                                theBday.innerHTML = Q4A+yearth;

                                            
                                                             }
                                        </script>
                                                


<h1>  </h1>



      


<form action="/show_reg_save" method ="post" class = "form-inline">

 <div class="panel panel-default">
  <div class="panel-body">
    <h3><b>ข้อมูลนักศึกษา</b></h3>
  </div>
</div><br><br>

 
 <div class="container-fluid">
  
                    <div class="row">
                       <div class="col-md-2">  <label for="ID_S"><b> รหัสนักศึกษา</b></label></div>
                       <div class="col-md-10"> <input type="number" class="form-control"  name="ID_S" placeholder="รหัสนักศึกษา">  </div>
                      
                    </div> <br><br>

                    <!--1/\ /*********************************************************************\ -->
                
                    <div class="row">
                       <div class="col-md-2">  <label for="Name_S"><b> ชื่อ-สกุล</b></label></div>
                       <div class="col-md-10"> 
                                             <select name="On_name"  class="form-control" >
                                              <option value = "1" >นาย</option> 
                                              <option value = "2" >นางสาว</option> 
                                              <option value = "3">นาง</option> 
                                              </select>
                                              <input type="text" class="form-control"  name="Nameands_S" placeholder="ชื่อ-สกุล">  
                                              
                        </div>
                      
                    </div> <br><br>

                    <!--2/\ /*********************************************************************\ -->
                
                    <div class="row">
                       <div class="col-md-2">  <label for="gender"><b> เพศ</b></label></div>
                       <div class="col-md-10"> <input type="radio" name="Gender_S" value="1"> ชาย&emsp;
                                               <input type="radio" name="Gender_S" value="2"> หญิง&emsp;
                                               <input type="radio" name="Gender_S" value="3"> เพศทางเลือก<br>   </div>
                      
                    </div> <br><br>
                    
                    <!--3/\ /*********************************************************************\ -->
                
                    <div class="row">
                       <div class="col-md-2">  <label for="B_date"><b>วัน/เดือน/ปี เกิด</b></label></div>
                       <div class="col-md-3"> <input type="date" class="form-control"  name="Date_S" id="Date_S" onchange="date1()" placeholder="วว/ดด/ปปปป">  </div>
                       <div class="col-md-3"> <div class="panel panel-default"><div class="panel-body">  <label for="B_date"><b>อายุ</b>&emsp; <b id="FBday" >โปรดกรอกวันเกิด</b> </label></div></div></div>
                       <div class="col-md-4"></div>
                      
                    </div> <br><br>
                   
                    <!--4/\ /*********************************************************************\ -->
                            
                    <div class="row">
                       <div class="col-md-2">  <label for="Fac"><b>สังกัดคณะ</b></label></div>
                       <div class="col-md-10">   <select name="Fac_S"  class="form-control"  id ='M_FAC' onchange="fac1(this.id,'major_s')">
                                              <option value = "00">--เลือกคณะ--</option> 
                                              <option value = "01" >คณะมนุษยศาสตร์และสังคมศาสตร์</option> 
                                              <option value = "02" >คณะวิทยาการคอมพิวเตอร์</option> 
                                              <option value = "03">คณะเทคโนโลยีอุตสาหกรรม</option> 
                                              <option value = "04">คณะครุศาสตร์</option> 
                                              <option value = "05">คณะวิทยาศาสตร์</option> 
                                              <option value = "06">คณะบริหารธุรกิจและการจัดการ</option> 
                                              <option value = "07">คณะนิติศาสตร์</option> 
                                              <option value = "08"> คณะเกษตรศาสตร์</option> 
                                              <option value = "09">คณะพยาบาล</option> 
                                              <option value = "10">คณะแพทย์แผนไทยและแพทย์ทางเลือก</option> 
                                              <option value = "11">คณะสาธารณสุขศาสตร์</option> 
                                              </select>

                                                
                       </div>
                      
                      
                    </div> <br><br>
                   
                    <!--5/\ /*********************************************************************\ -->
                    
                    <div class="row">
                       <div class="col-md-2">  <label for="major"><b> สาขาวิชา</b></label></div>
                       <div class="col-md-10"> <select name="major_s"  class="form-control"  id ='major_s' > 
                                                         <option value = "0">--โปรดเลือกคณะ--</option> 
                                               </select> </div>
                      
                    </div> <br><br>
                   
                    <!--6/\ /*********************************************************************\ -->

                 <div class="row">
                       <div class="col-md-2">  <label for="address"><b>ที่อยู่</b></label></div>
                       <div class="col-md-10"> <textarea class="form-control" name="Address_S" placeholder="ที่อยู่"> </textarea>  </div>
                      
                    </div> <br><br>
                   
                    <!--7/\ /*********************************************************************\ -->

                     <div class="row">
                       <div class="col-md-2">  <label for="number_f"><b>เบอร์โทรศัพท์</b></label></div>
                       <div class="col-md-10"> <input type="number" class="form-control"  name="Number_S" id="Number_S" placeholder="เบอร์โทรศัพท์">  </div>
                      
                    </div> <br><br>
                   
                    <!--8/\ /*********************************************************************\ -->

                     <div class="row">
                       <div class="col-md-2">  <label for="L_food"><b>อาหารที่ชอบ</b></label></div>
                       <div class="col-md-10"> <label class="checkbox-inline"> <input type="checkbox" name="L_food1" value="1">ส้มตำ &emsp;</label> 
                                               <label class="checkbox-inline"> <input type="checkbox" name="L_food2" value="1">ลาบ &emsp;</label> 
                                               <label class="checkbox-inline"> <input type="checkbox" name="L_food3" value="1">ก้อย &emsp;</label> 
                                               <label class="checkbox-inline"> <input type="checkbox" name="L_food4" value="1">พิชช่า &emsp;</label> 
  
  
                      </div>
                      
                    </div> <br><br> <hr> <br>
                   
                    <!--9/\ /*********************************************************************\ -->

                     <div class="row">
                       <div class="col-md-2">  <label for="Username"><b>Username</b></label></div>
                       <div class="col-md-10"> <input type="text" class="form-control"  name="User_S" placeholder="Username">  </div>
                      
                    </div> <br><br>
                   
                    <!--10/\ /*********************************************************************\ -->

                     <div class="row">
                       <div class="col-md-2">  <label for="password"><b>Password</b></label></div>
                       <div class="col-md-10"> <input type="password" class="form-control"  name="Password_S" placeholder="Password">  </div>
                      
                    </div> <br><br>
                   
                    <!--11/\ /*********************************************************************\ -->


                    <div class="row">
                            <div class="col-md-12">    <button type="submit" class="btn btn-success"><span class ="glyphicon glyphicon-ok">บันทึก</span></button>&emsp;&emsp;
                                                      <a href = "/list_users" class="btn btn-danger" >  <span class ="glyphicon glyphicon-remove" >ยกเลิก</span></a>

 

                             </div>
                       <!-- <div class="col-md-10">   </div> -->
                      
                    </div> 
                     
                   
                    <!--Last/\ /*********************************************************************\ -->
                    </div>

                                   
                           

                                   
                                      
                                      
                                     
                                      
                                   
                                  
   
      
  
</div>
 






@endsection