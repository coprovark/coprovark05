@extends('layouts.main')

@section('title', 'Page Title')


@section('content')


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

    function  type_S1(t1,t2){
                                            	var t1 = document.getElementById(t1);
	                                            var t2 = document.getElementById(t2);
                                                t2.innerHTML = "";
                                                if(t1.value == "1"){
                                                    var optionArray = ["|เลือกเฉพาะนักศึกษา"];
                                                } else if(t1.value == "2"){
                                                    var optionArray = ["00|--ประเภทนักศึกษา--", "1|ปกติ","2|กศ.บป","3|กรอ.","4|กยศ." ];  
                                                    
                                              } else if(t1.value == "3"){
                                                    var optionArray = ["|เลือกเฉพาะนักศึกษา"];
                                                    }
                                                for(var option in optionArray){
                                                    var pair = optionArray[option].split("|");
                                                    var newOption = document.createElement("option");
                                                    newOption.value = pair[0];
                                                    newOption.innerHTML = pair[1];
                                                    t2.options.add(newOption);
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


<div class="panel panel-default">
  <div class="panel-body">

   <div class="container-fluid">
  
  <div class="row">
     <div class="col-md-3"> <b> CO-PROVARK</b>
                            <br>เลขที่ No.
                            <br>วันที่ Date.            
                    
        </label></div>
     <div class="col-md-6">ใบสมัครเข้าร่วมโครงการ   </div>
     <div class="col-md-3">  </div>
    
  </div>
  </div>
  </div>
</div><br><br>


<form action="/co_list" method ="post" class = "form-inline">




<div class="container-fluid">
 
  <div class="row">
     <div class="col-md-2"> ประเภทผู้ใช้งาน</div>
     <div class="col-md-4"> <input type="radio" name="user_type" value="1"  id ='type1' onchange="type_S1(this.id,'type_S2')" >นักเรียน&emsp;
                           <input type="radio" name="user_type" value="2"  id ='type2' onchange="type_S1(this.id,'type_S2')" >นักศึกษา&emsp;
                           <input type="radio" name="user_type" value="3"   id ='type3' onchange="type_S1(this.id,'type_S2')" >ครู/อาจารย์<br>  </div>
     <div class="col-md-2"> ประเภทนักศึกษา</div>
     <select name="On_name"  class="form-control"  id ='type_S2' >
                                              <option value = "1" >เลือกเฉพาะนักศึกษา</option> 
                                              
                                              </select>
 
  </div><br><br>
  <!-- -----***___ประเภทผู้ใช้___***----- -->

   <div class="row">
  
     <div class="col-md-2"> ชื่อ-สกุล</div>
     <div class="col-md-10">  <select name="On_name"  class="form-control" >
                                              <option value = "1" >นาย</option> 
                                              <option value = "2" >นางสาว</option> 
                                              <option value = "3">นาง</option> 
                                              </select>
                              <input type="text" name ="find" value = "" class = "form-control">   </div>
   
    
 
  </div><br><br>
  <!-- -----***___ชื่อผู้ใช้___***----- -->


  <div class="row">
                       <div class="col-md-2">  <label for="B_date"><b>วัน/เดือน/ปี เกิด</b></label></div>
                       <div class="col-md-4"> <input type="date" class="form-control"  name="Date_S" id="Date_S" onchange="date1()" placeholder="วว/ดด/ปปปป">  </div>
                       <div class="col-md-3"> <div class="panel panel-default"><div class="panel-body">  <label for="B_date"><b>อายุ</b>&emsp; <b id="FBday" >โปรดกรอกวันเกิด</b> </label></div></div></div>
                       <div class="col-md-3"></div>
                      
                    </div> <br><br>
<!-- -----***___วันเกิด___***----- -->

<div class="row">
  
  <div class="col-md-2"> สถาบันการศึกษา</div>
  <div class="col-md-10">  <select name="On_name"  class="form-control" >
                                           <option value = "" >โปรดเลือกสถาบัน</option> 
                                           <option value = "1" >มรภ.ราชภัฏอุบล</option> 
                                           
                                           </select>
                             </div>

 

</div><br><br>
<!-- -----***___สถาบัน___***----- -->

<div class="row">
  
  <div class="col-md-2"> สังกัดคณะ</div>
  <div class="col-md-4"> <select name="Fac_S"  class="form-control"  id ='M_FAC' onchange="fac1(this.id,'major_s')">
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

 <div class="col-md-2">สาขาวิชา</div>
 <div class="col-md-4"> <select name="major_s"  class="form-control"  id ='major_s' > 
                                                         <option value = "0">--โปรดเลือกคณะ--</option> 
                                               </select> </div>

 

</div><br><br>
<!-- -----***___คณะ+สาขา___***----- -->

<div class="row">
     <div class="col-md-2">สถานภาพ</div>
     <div class="col-md-4"> <select name="On_name"  class="form-control" >
                                              <option value = "1" >โสด</option> 
                                              <option value = "2" >แต่งงาน</option> 
                                              <option value = "3" >ม่าย</option> 
                                              </select>  </div>
    <div class="col-md-2">หมู่เลือด</div>
    <div class="col-md-4"> <select name="On_name"  class="form-control" >
                                              <option value = "" >โปรดเลือกหมู่เลือด</option> 
                                              <option value = "O" >O</option> 
                                              <option value = "A" >A</option> 
                                              <option value = "B" >B</option> 
                                              <option value = "AB" >AB</option> 
                                              </select>  </div>
   
    
 
  </div><br><br>
  <!-- -----***___สถานภาพ___***----- -->


  

  <div class="row">
     <div class="col-md-2">เชื้อชาติ</div>
     <div class="col-md-4"> <input type="text" name ="find" value = "" class = "form-control">  </div>
     <div class="col-md-2">สัญชาติ</div>
     <div class="col-md-4"> <input type="text" name ="find" value = "" class = "form-control">  </div>
   
    
 
  </div><br><br>
  <!-- -----***___เชื้อชาติ/สัญชาติ___***----- -->

  <div class="row">
     <div class="col-md-2">ศาสนา</div>
     <div class="col-md-10"> <select name="On_name"  class="form-control" >
                                              <option value = "1" >ศาสนาพุธ</option> 
                                              <option value = "2" >ศาสนาคริสต์</option> 
                                              <option value = "3" >ไม่ระบุ</option> 
                                              </select>  </div>
   
    
 
  </div><br><br>
  <!-- -----***___ศาสนา___***----- -->


  

  </div> <br>






<a href="/co_title_reg" class="btn btn-success" ><span class ="glyphicon glyphicon-plus"></span>เพิ่มรายการ</a>&emsp;&emsp;

     <input type="text" name ="find" value = "" class = "form-control">  
       <button type="submit" class="btn btn-primary"><span class ="glyphicon glyphicon-search">ค้นหา</span></button>
      </div> 
    
    
</form>



</table>





























@endsection