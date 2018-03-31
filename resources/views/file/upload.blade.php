@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>



    

    <div class="panel panel-default">
  <div class="panel-body">

   <div class="container-fluid">
  
  <div class="row">
 
     <div class="col-md-3">

     @if(count($edit) == 0 )
 <form action="/upload1" method="post" enctype="multipart/form-data">
        <center><h3>บันทึกรูปภาพ</h3></center>
        <input type="text" name="uploadfilename" class="form-control"><br>
        <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
        <center>
            <img id="view" src="{{ asset('images/icon_blank.png')}}" style="width: 120px;" />
        </center>
        <br><br>
        <input type="submit" value="upload" class="btn btn-primary btn-block">
        </form>
    @elseif(count($edit) >0 )
        @foreach($edit as $row)
<form action="/update_ed" method="post" enctype="multipart/form-data">


        <center><h3>บันทึกรูปภาพ</h3></center>
        <input type="hidden" name="ID" value="{{$row -> ID}}">
        <input type="text" name="uploadfilename" class="form-control" value="{{$row -> FileName}}"><br>
        <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
        <center>
            <img id="view" src="{{ asset('upload/'.$row -> FilePath)}}" style="width: 120px;" />
        </center>
        <br><br>
        <input type="submit" value="upload" class="btn btn-primary btn-block">
        </form><br><br>
        @endforeach
    @endif
    </div>





<div class="col-md-9">
<button class="btn btn-danger" onclick="getID()" >Delete All</button>
<table border="1" width="100%">
    <thead>
        <tr>
            <th> <input type="checkbox" name="L_food4"  id="itemall"></th>
 
            <th>#</th>
            <th>ชื่อไฟล์</th>
            <th>ประเภทไฟล์</th>
            <th>ขนาด</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
    @foreach($datatable as $row)
        <tr>
        <td><input type="checkbox" name="L_food4" value="{{$row->ID}}" class="item"></td>
            <td>
                @if($row->FileType == 'jpeg' || $row->FileType == 'png')
                    <img src="{{ asset('upload/'.$row -> FilePath)}}" width="60px">
                @endif  
            </td>
            <td>{{ $row->FileName }}</td>
            <td>{{ $row->FileType }}</td>
            <td>{{ $row->FileSize }}</td>
            <td>
                <a href="dl/{{$row->FilePath}}/{{ $row->FileName }}.{{ $row->FileType }}" target="new" class="btn btn-primary">Download</a>
                <a href="rm/{{$row->ID}}"   class="btn btn-danger">Delete</a>
                <a href="{{url('ed/'.$row->ID)}}"  class="btn btn-success">แกไข</a>
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





<script>
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


		$('#itemall').click(function(){
			if($('#itemall').is(':checked')){
				$(".item").prop('checked', true);
			}else{
				$(".item").prop('checked', false);
			}
		});


     function getID(){
			var final = [];
			$('.item:checked').each(function(){        
			    var values = $(this).val();
			    final.push(values);
			});
            //console.log(final);


            	//send data to server
			$.ajax({
				url: 'api/delete',
				type: 'POST',
				dataType: 'json',
				data: {param: final},
			})
			.done(function(res) {
                location.reload();
							});

        }







</script>





@endsection