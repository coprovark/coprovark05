@extends('layouts.main')

@section('title', 'Page Title')


@section('content')


<h1>  



      


<form action="/list_users_find" method ="post" class = "form-inline">

 </h1>
 <div class= "form-group">
 <button class="btn btn-danger" a href="/form_register"><span class ="glyphicon glyphicon-trash"></span>ลบรายการ</button>
       <input type="text" name ="find" value = "{{$find}}" class = "form-control">  
       </div>  </form>
 <table class="table">
 <tr>
    <td>ID</td>
    <td>USERNAME</td>
    <td>PASSWORD</td>
    <td>STATUS</td> 
    <td></td>
 </tr> 

 @foreach($datalist as $alldata)
 <tr>
    <td>{{ $alldata->id}} </td>
    <td>{{ $alldata->username}} </td>
    <td>{{ $alldata->password}} </td>
    <td>{{ $alldata->status}} </td> 
     <td> <button class="btn btn-danger" onclick="return _confirm('{{ $alldata->id}}')"><span class ="glyphicon glyphicon-trash"></span>ลบรายการ</button>
          <button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>แก้ไข</button>
    </td> 
  
    
 </tr> 
 @endforeach
 </table>

 <script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_user/'+id;
                                    //'/delete_user/15';
        }
    }
</script>


 
@endsection