<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD NOTES</title>
</head>
<body>
<fieldset>
	<h1>UPLOAD NOTES</h1>
	

	<form method="post" enctype="multipart/form-data">
		
		{{csrf_field()}}
		<table>
		<tr><td>Name</td>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
	<tr>
				<td>File</td>
				<td><input type="file" name="myfile"></td>
			</tr>
		<tr><td>Date</td>
		<td><input type="date" name="date" value="{{old('date')}}"></td>
		</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Save"></td>
				<td><a href="{{route('home.checknotes')}}">Check Notes</a></td>
			</tr>
		</table>
		
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<a href="{{route('home.index')}}">Back</a>
	</fieldset>
</body>
</html>