@extends('layouts.main')
@section('content')
       
       
                        
                        <form class="form-inline">
                                <div class="form-group">
                                        <label for="exampleName">ชื่อสกุล</label>
                                        <select id="onname" class="form-control" >
                                              <option value = "นาย">นาย</option> 
                                              <option value = "นางสาว">นางสาว</option> 
                                              <option value = "นาง">นาง</option> 
                                              <option value = "เด็กชาย">ด.ช.</option> 
                                              <option value = "เด็กหญิง">ด.ญ.</option> 
                                              </select>
                                      <input type="text" class="form-control"  id="examplesex" placeholder="ชื่อ-สกุล"> <br><br>
                                      <label for="examplesex" >เพศ</label>
                                      <select id="sex"  class="form-control">
                                              <option value = "นาย">ชาย</option> 
                                              <option value = "นางสาว">หญิง</option> 
                                              </select> <br><br>
                                   
                                   
                                   
                                </div>
                        </form>


                        
                        <form>
                            <div class="form-group">
                              
                            
                            <label for="examplenumber">เบอร์โทร</label>
                            <input type="number" class="form-control" id="examplenumber" placeholder="เบอร์โทร"> <br>

                            <label for="exampleadd">ที่อยู่</label>
                            <textarea class="form-control" id="examplenumber" placeholder="ที่อยู่"> </textarea> <br>
                    
                    
                    

                            </div>

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                  <br>


                                    <label for="examplemakelove">สิ่งที่ชอบ</label> <br>
                                      <label class="checkbox-inline"> 

                                    <input type="checkbox" name="checkbox1" value="1">อาหารไทย <br>
                                </label>
                                    <label class="checkbox-inline">
                                    <input type="checkbox" name="checkbox2" value="2">อาหารลาว <br>
                                </label>
                                    <label class="checkbox-inline">
                                    <input type="checkbox" name="checkbox3" value="3">อาหารญี่ปุ่น <br>
                                </label>
                                    <label class="checkbox-inline">
                                    <input type="checkbox" name="checkbox4" value="4">อาหารอีสาน <br>
                                </label>
                                    <label class="checkbox-inline">
                                    <input type="checkbox" name="checkbox5" value="5">อาหารฝรั่ง <br>
                                </label>
                                    <label class="checkbox-inline">
                                    <input type="checkbox" name="checkbox6" value="6">อาหารจีน <br>
                                </label>
                                    <label class="checkbox-inline">
                                    <input type="checkbox" name="checkbox7" value="7">อาหารใต้ </label>
<br><br><br>

                                    <label for="examplethai">จังหวัด</label>
                                    <select name="province" class="form-control">
                                            <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                            <option value="กระบี่">กระบี่ </option>
                                            <option value="กาญจนบุรี">กาญจนบุรี </option>
                                            <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                            <option value="กำแพงเพชร">กำแพงเพชร </option>
                                            <option value="ขอนแก่น">ขอนแก่น</option>
                                            <option value="จันทบุรี">จันทบุรี</option>
                                            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                            <option value="ชัยนาท">ชัยนาท </option>
                                            <option value="ชัยภูมิ">ชัยภูมิ </option>
                                            <option value="ชุมพร">ชุมพร </option>
                                            <option value="ชลบุรี">ชลบุรี </option>
                                            <option value="เชียงใหม่">เชียงใหม่ </option>
                                            <option value="เชียงราย">เชียงราย </option>
                                            <option value="ตรัง">ตรัง </option>
                                            <option value="ตราด">ตราด </option>
                                            <option value="ตาก">ตาก </option>
                                            <option value="นครนายก">นครนายก </option>
                                            <option value="นครปฐม">นครปฐม </option>
                                            <option value="นครพนม">นครพนม </option>
                                            <option value="นครราชสีมา">นครราชสีมา </option>
                                            <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                            <option value="นครสวรรค์">นครสวรรค์ </option>
                                            <option value="นราธิวาส">นราธิวาส </option>
                                            <option value="น่าน">น่าน </option>
                                            <option value="นนทบุรี">นนทบุรี </option>
                                            <option value="บึงกาฬ">บึงกาฬ</option>
                                            <option value="บุรีรัมย์">บุรีรัมย์</option>
                                            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                            <option value="ปทุมธานี">ปทุมธานี </option>
                                            <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                            <option value="ปัตตานี">ปัตตานี </option>
                                            <option value="พะเยา">พะเยา </option>
                                            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                            <option value="พังงา">พังงา </option>
                                            <option value="พิจิตร">พิจิตร </option>
                                            <option value="พิษณุโลก">พิษณุโลก </option>
                                            <option value="เพชรบุรี">เพชรบุรี </option>
                                            <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                            <option value="แพร่">แพร่ </option>
                                            <option value="พัทลุง">พัทลุง </option>
                                            <option value="ภูเก็ต">ภูเก็ต </option>
                                            <option value="มหาสารคาม">มหาสารคาม </option>
                                            <option value="มุกดาหาร">มุกดาหาร </option>
                                            <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                            <option value="ยโสธร">ยโสธร </option>
                                            <option value="ยะลา">ยะลา </option>
                                            <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                            <option value="ระนอง">ระนอง </option>
                                            <option value="ระยอง">ระยอง </option>
                                            <option value="ราชบุรี">ราชบุรี</option>
                                            <option value="ลพบุรี">ลพบุรี </option>
                                            <option value="ลำปาง">ลำปาง </option>
                                            <option value="ลำพูน">ลำพูน </option>
                                            <option value="เลย">เลย </option>
                                            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                            <option value="สกลนคร">สกลนคร</option>
                                            <option value="สงขลา">สงขลา </option>
                                            <option value="สมุทรสาคร">สมุทรสาคร </option>
                                            <option value="สมุทรปราการ">สมุทรปราการ </option>
                                            <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                            <option value="สระแก้ว">สระแก้ว </option>
                                            <option value="สระบุรี">สระบุรี </option>
                                            <option value="สิงห์บุรี">สิงห์บุรี </option>
                                            <option value="สุโขทัย">สุโขทัย </option>
                                            <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                            <option value="สุรินทร์">สุรินทร์ </option>
                                            <option value="สตูล">สตูล </option>
                                            <option value="หนองคาย">หนองคาย </option>
                                            <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                            <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                            <option value="อุดรธานี">อุดรธานี </option>
                                            <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                            <option value="อุทัยธานี">อุทัยธานี </option>
                                            <option value="อุบลราชธานี">อุบลราชธานี</option>
                                            <option value="อ่างทอง">อ่างทอง </option>
                                            
                                      </select><br><br>

                                      <label for="exampleuser">USER</label>
                                      <input type="text" class="form-control" id="USER" placeholder="Username"> <br>
                                
                                      <label for="examplepassword">password</label>
                                      <input type="password" class="form-control" id="Password" placeholder="Password"> <br>
                                      <label for="examplerepassword">repassword</label>
                                      <input type="password" class="form-control" id="RePassword" placeholder="RePassword"> <br>
                                
                                
                                </div>
                               
                           
                            <button type="submit" class="btn btn-default">Submit</button>


                           <br><br> <button type="reset" class="btn btn-default">Reset</button>


                          </form>

@endsection