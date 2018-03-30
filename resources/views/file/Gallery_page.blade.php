@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    

    <div class="panel panel-default">
  <div class="panel-body">

   <div class="container-fluid">
  
  <div class="row">
  
 
<div class="col-md-12">
<table border="0" width="100%" >
    <thead>
    <tr>
            <th  width="80%" height="50"><p class="text-center">
            <input type="text" name ="find" value = "" class = "form-control"> </p>
            </th>
            <th width="10%" height="50"><p class="text-center"><button type="submit" class="btn btn-primary"><span class ="glyphicon glyphicon-search">ค้นหา</span></button></p>
            </th>
            <th width="10%" height="50"><p class="text-center"><a href="/show_reg" class="btn btn-success" ><span class ="glyphicon glyphicon-plus"></span>เพิ่ม</a></p>
            </th>
           
        </tr>
    </thead>
    </table><hr>
    <table border="0" width="100%" class="table table-hover">
    <thead>
        <tr>
        <th width="10%"><p class="text-center">ลำดับ</P></th>
        <th width="40%" height="40"><p class="text-center">ชื่อGallery</P></th>
        <th width="10%" height="40"><p class="text-center">วันที่สร้าง</P></th>
        <th width="10%" height="40"><p class="text-center">วันที่ปรับปรุง</P></th>
        <th width="10%" height="40"><p class="text-center">จำนวนภาพ</P></th>
        <th width="20%" height="40"><p class="text-center">ดำเนินการ</P></th>
        </tr>
    </thead>
    <tbody>
    @foreach($datatable as $row)
        <tr>
            <td><p class="text-center">{{ $row->Gallery_ID }}</P></td>
            <td><p class="text-center">{{ $row->Gallery_Name }}</P></td>
            <td><p class="text-center">{{ $row->Gallery_Date }}</P></td>
            <td><p class="text-center">{{ $row->Gallery_Date_Fix }}</P></td>
            <td><p class="text-center">{{ $row->Gallery_Number_Photo }}</P></td>
            <td>             
            <p class="text-center"> <button class="btn btn-danger" onclick="return _confirm('')"><span class ="glyphicon glyphicon-trash"></span>ลบ</button>
        <a href="/list_user_edit/" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>แก้ไข</a></P>
            </td> 
        </tr> 
    @endforeach
    </tbody>
</table>
</div>

</div>
</div>
</div>
</div>





<!-- <script>
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                if(input.files[0].type == 'image/jpeg' || input.files[0].type == 'image/png'){
                    $('#view').attr('src', e.target.result);
                }else{
                    alert('รูปแบบไฟล์ไม่ถูกต้อง');
                    $('#pathphoto').val('');
                    $('#view').attr('src', 'images/icon_blank.png');
                   
                }
            }
            reader.readAsDataURL(input.files[0]);

        }
    }

    $("#pathphoto").change(function() {
        readURL(this);
    });

</script> -->





@endsection