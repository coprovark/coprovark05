@extends('layouts.main')

@section('title', 'Page Title')


@section('content')


<form action="/show_list_find" method ="post" class = "form-inline">


<div class= "form-group">
<a href="/show_reg" class="btn btn-success" ><span class ="glyphicon glyphicon-plus"></span>เพิ่มรายการ</a>&emsp;&emsp;

      <input type="text" name ="find" value = "{{$find}}" class = "form-control"> 
       <button type="submit" class="btn btn-primary"><span class ="glyphicon glyphicon-search">ค้นหา</span></button>
      </div> 
    
    
</form>
<table class="table">
<tr>
   <td>รหัสนักศึกษา</td>
   <td>ชื่อ-สกุล</td>
   <td>วัน เดือน ปีเกิด</td>
   <td>สังกัดคณะ</td> 
   <td>ดำเนินการ</td>
</tr> 

@foreach($datalist as $alldata)
<tr>
   <td>{{ $alldata->sid}} </td>
   <td>{{ $alldata->fullName}} </td>
   <td>{{ $alldata->birthDay}} </td>
   <td>{{ $alldata->facultyID}} </td> 
    <td> <button class="btn btn-danger" onclick="return _confirm('{{ $alldata->sid}}')"><span class ="glyphicon glyphicon-trash"></span>ลบรายการ</button>
         <button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>แก้ไข</button>
   </td> 
 
   
</tr> 
@endforeach
</table>

<script>
   function _confirm(sid){
       if(confirm('ยืนยันการลบข้อมูล')){
           window.location.href = '/show_delete_user/'+sid;
    
       }
   }
</script>






@endsection