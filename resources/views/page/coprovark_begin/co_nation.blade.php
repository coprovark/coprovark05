@extends('layouts.main')

@section('title', 'Page Title')


@section('content')


<form action="/co_list" method ="post" class = "form-inline">


<div class= "form-group">
<a href="/co_nation_reg" class="btn btn-success" ><span class ="glyphicon glyphicon-plus"></span>เพิ่มรายการ</a>&emsp;&emsp;

     <input type="text" name ="find" value = "" class = "form-control">  
       <button type="submit" class="btn btn-primary"><span class ="glyphicon glyphicon-search">ค้นหา</span></button>
      </div> 
    
    
</form>
<table class="table">
<tr>
   <td>nation_id</td>
   <td>nation_code</td>
   <td>nation_name</td>
   <td>nation_info</td> 
   <td>ดำเนินการ</td>
</tr> 


</table>

<script>
   function _confirm(sid){
       if(confirm('ยืนยันการลบข้อมูล')){
           window.location.href = '/show_delete_user/'+sid;
    
       }
   }
</script>






@endsection