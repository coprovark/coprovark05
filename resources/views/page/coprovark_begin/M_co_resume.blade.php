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

<form action="/M_co_save" method ="post" class = "form-inline">
<div class="panel panel-default">
  <div class="panel-body">

   <div class="container-fluid">
  
  <div class="row">
     <div class="col-md-3"> <b> CO-PROVARK</b><br><br>
     <div class="row">
     <div class="col-md-5">เลขที่ No.</div>
      <div class="col-md-7"><input type="text" name ="on_U" value = "" class = "form-control"></div></div> <br>
  <div class="row">
      <div class="col-md-5">วันที่ Date.</div> 
      <div class="col-md-7"><input type="text" name ="date_U" value = "" class = "form-control"> </div></div>          
                    
        </label></div>
     <div class="col-md-7"><p class="text-center">ใบสมัครเข้าร่วมโครงการ </p> <br>
                           <textarea class="form-control" name = "co_textarea" rows="3" cols="100" ></textarea>                                                 
                                                                             </div>
     <div class="col-md-2"> 
     <img src="https://scontent.fbkk5-1.fna.fbcdn.net/v/t1.0-9/24232728_1680045372058373_2189792765819063358_n.jpg?_nc_cat=0&_nc_eui2=v1%3AAeEThG76a5f3jLy7sP7sc022URlTsYAxUmV129EcyUXMF_mYfbJd9EvY1y5ThNz7PxIy6d0i9IwD_5OBj96X4RN9SZCd8qRivQgWIFsu0ymlVA&oh=810dfcb2a9efb4ac1d5c4f9070ffc00d&oe=5B27CD21"  class="img-thumbnail">
  </div>
    
  </div>
  </div>
  </div>
</div><br><br>






<div class="container bs-docs-container">
<div class="row">
<div class="col-md-11">
 
  <div class="row">
     <div class="col-md-2"> ประเภทผู้ใช้งาน</div>
     <div class="col-md-4"> <input type="radio" name="user_type" value="1"  id ='type1' onchange="type_S1(this.id,'type_S2')" >&nbsp;นักเรียน&emsp;
                           <input type="radio" name="user_type" value="2"  id ='type2' onchange="type_S1(this.id,'type_S2')" >&nbsp;นักศึกษา&emsp;
                           <input type="radio" name="user_type" value="3"   id ='type3' onchange="type_S1(this.id,'type_S2')" >&nbsp;ครู/อาจารย์<br>  </div>
     <div class="col-md-2"> ประเภทนักศึกษา</div>
     <select name="user_type_S"  class="form-control"  id ='type_S2' >
                                              <option value = "1" >เลือกเฉพาะนักศึกษา</option> 
                                              
                                              </select>
 
  </div><br><br>
  <!-- -----***___ประเภทผู้ใช้___***----- -->

  <div class="row">
  
  <div class="col-md-2">รหัสนักศึกษา/อ้างอิง</div>
     <div class="col-md-4"> <input type="text" name ="no_S" value = "" class = "form-control">   </div>
     <div class="col-md-2">รหัสประจำตัวประชาชน</div>
     <div class="col-md-4"> <input type="number" name ="no_P" value = "" class = "form-control">   </div>

    
  
 
  </div><br><br>
  <!-- -----***___รหัสน.ศ./อ้างอิง-รหัสประจำตัวปปช___***----- -->

   <div class="row">
  
     <div class="col-md-2"> ชื่อ-สกุล</div>
     <div class="col-md-4">  <select name="On_name"  class="form-control" >
                                              <option value = "1" >นาย</option> 
                                              <option value = "2" >นางสาว</option> 
                                              <option value = "3">นาง</option> 
                                              </select>
                              <input type="text" name ="name" value = "" class = "form-control">   </div>
     <div class="col-md-2"> ชื่อเล่น</div>
     <div class="col-md-4"> <input type="text" name ="nickname" value = "" class = "form-control">   </div>

    
 
  </div><br><br>
  <!-- -----***___ชื่อผู้ใช้/ชื่อเล่น___***----- -->

  <div class="row">
                       <div class="col-md-2">  <label for="B_date"><b>วัน/เดือน/ปี เกิด</b></label></div>
                       <div class="col-md-4"> <input type="date" class="form-control"  name="Date_S" id="Date_S" onchange="date1()" placeholder="วว/ดด/ปปปป">  </div>
                       <div class="col-md-3"> <div class="panel panel-default"><div class="panel-body">  <label for="B_date"><b>อายุ</b>&emsp; <b id="FBday" >โปรดกรอกวันเกิด</b> </label></div></div></div>
                       <div class="col-md-3"></div>
                      
                    </div> <br>
<!-- -----***___วันเกิด___***----- -->

<div class="row">
  
  <div class="col-md-2"> สถาบันการศึกษา</div>
  <div class="col-md-4">  <select name="school"  class="form-control" >
                                           <option value = "" >โปรดเลือกสถาบัน</option> 
                                           <option value = "1" >มรภ.ราชภัฏอุบล</option> 
                                           
                                           </select>
                             </div>
  <div class="col-md-2"> Learning Style</div>
  <div class="col-md-4"><label class="checkbox-inline"> 
                                               <label class="checkbox-inline"> <input type="checkbox" name="L_Style1" value="1">V &emsp;</label> 
                                               <label class="checkbox-inline"> <input type="checkbox" name="L_Style2" value="1">A &emsp;</label> 
                                               <label class="checkbox-inline"> <input type="checkbox" name="L_Style3" value="1">R &emsp;</label>
                                               <label class="checkbox-inline"> <input type="checkbox" name="L_Style4" value="1">K &emsp;</label></div>
  

</div><br><br>
<!-- -----***___สถาบัน/Learning Style___***----- -->

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
  
  <div class="col-md-2">ชั้นปี</div>
     <div class="col-md-4"> <input type="number" name ="year_U" value = "" class = "form-control">   </div>
     <div class="col-md-2">เกรดเฉลี่ย</div>
     <div class="col-md-4"> <input type="number" name ="scroll_U" value = "" class = "form-control">   </div>

    
  
 
  </div><br><br>
  <!-- -----***___ชั้นปี/เกรด___***----- -->

  <div class="row">
     <div class="col-md-2">สถานภาพ</div>
     <div class="col-md-4"> <select name="marital_S"  class="form-control" >
                                              <option value = "1" >โสด</option> 
                                              <option value = "2" >แต่งงาน</option> 
                                              <option value = "3" >ม่าย</option> 
                                              </select>  </div>
    <div class="col-md-2">หมู่เลือด</div>
    <div class="col-md-4"> <select name="blood"  class="form-control" >
                                              <option value = "" >โปรดเลือกหมู่เลือด</option> 
                                              <option value = "O" >O</option> 
                                              <option value = "A" >A</option> 
                                              <option value = "B" >B</option> 
                                              <option value = "AB" >AB</option> 
                                              </select>  </div>
   
    
 
  </div><br><br>
  <!-- -----***___สถานภาพ/หมู่เลือด___***----- -->

   <div class="row">

   <div class="col-md-2">เพศ</div>
     <div class="col-md-2">  <select name="gender"  class="form-control" >
                                           <option value = "" >โปรดเลือกเพศ</option> 
                                           <option value = "1" >ชาย</option> 
                                           <option value = "2" >หญิง</option> 
                                           <option value = "3" >เพศทางเลือก</option> 
                                           
                                           </select> </div>
  
     <div class="col-md-1">น้ำหนัก</div>
     <div class="col-md-3"> <input type="number" name ="weight" value = "" class = "form-control">   </div>
     <div class="col-md-1">ส่วนสูง</div>
     <div class="col-md-3"> <input type="number" name ="height" value = "" class = "form-control">   </div>

    
  
 
  </div><br><br>
  <!-- -----***___น้ำหนัก/ส่วนสูง/เพศ___***----- -->


  <div class="row">
     <div class="col-md-2">ศาสนา</div>
     <div class="col-md-2"> <select name="religion"  class="form-control" >
                                              <option value = "1" >ศาสนาพุธ</option> 
                                              <option value = "2" >ศาสนาคริสต์</option> 
                                              <option value = "3" >ไม่ระบุ</option> 
                                              </select>  </div>
     <div class="col-md-1">เชื้อชาติ</div>
     <div class="col-md-3"> <input type="text" name ="nationality" value = "" class = "form-control">  </div>
     <div class="col-md-1">สัญชาติ</div>
     <div class="col-md-3"> <input type="text" name ="citizen" value = "" class = "form-control">  </div>
   
    
 
  </div><br><br>
  <!-- -----***___เชื้อชาติ/สัญชาติ___***----- -->

  <div class="row">
  <div class="col-md-2">ที่อยู่ตามภูมิลำเนา</div>
  <div class="col-md-10"><textarea class="form-control" name = "address_Pe" rows="3" cols="100"></textarea></div> 
 
  </div><br><br>
  <!-- -----***___ที่อยู่ตามภูมิลำเนา___***----- -->


  <div class="bs-docs-section" data-example-id="textarea-form-control">
  <div class="row">
  <div class="col-md-2">ที่อยู่ปัจจุบัน</div>
  <div class="col-md-10"><textarea class="form-control" name = "address_Pr" rows="3" cols="100" ></textarea></div>
   
    
 
  </div></div><br><br>
  <!-- -----***___ที่อยู่ปัจจุบัน___***----- -->

   <div class="row">
  
  <div class="col-md-2">เบอร๋โทรศัพท์</div>
     <div class="col-md-4"> <input type="number" name ="no_number" value = "" class = "form-control">   </div>
     <div class="col-md-2">มือถือ</div>
     <div class="col-md-4"> <input type="number" name ="no_phon" value = "" class = "form-control">   </div>

    
  
 
  </div><br><br>
  <!-- -----***___เบอร๋โทรศัพท์/มือถือ___***----- -->

    <div class="row">
  
  <div class="col-md-2">E-mail</div>
     <div class="col-md-4"> <input type="name" name ="email" value = "" class = "form-control">   </div>
     <div class="col-md-2">Facebook/Line</div>
     <div class="col-md-4"> <input type="name" name ="face_line" value = "" class = "form-control">   </div>

    
  
 
  </div><br><br>
  <!-- -----***___facebook/line-e_mail___***----- -->

    <div class="row">
     <div class="col-md-2">Web site</div>
     <div class="col-md-10"> <input type="name" name ="web_S" value = "" class = "form-control">   </div>

    
  
 
  </div><br><br>
  <!-- -----***___Web site___***----- -->

   <div class="row">
                            <div class="col-md-12">    <button type="submit" class="btn btn-success"><span class ="glyphicon glyphicon-ok">บันทึก</span></button>&emsp;&emsp;
                                                      <a href = "/list_users" class="btn btn-danger" >  <span class ="glyphicon glyphicon-remove" >ยกเลิก</span></a></div>
                                           
                    </div> 
                     
                   
                    <!--Last/\ /*********************************************************************\ -->




  </div> <br>







 </div> 
    </div>
    </div>
</form>



</table>





























@endsection