<!DOCTYPE html>
<html>
<head>
	<title>INSERT SCHEDULE</title>
</head>
<body>
<fieldset>
	<h1>INSERT SCHEDULE</h1>
	

	<form method="post">
		
		{{csrf_field()}}
		<table>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>

			<tr>
				<td>Day</td>
				<td><input type="text" name="day" value="{{old('day')}}"></td>
			</tr>
<tr>
				<td>Time</td>
				<td><input type="text" name="time" value="{{old('time')}}"></td>
			</tr>



	
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<br/>
	<a href="{{route('home.schedule')}}">Back</a>
	</fieldset>
</body>
</html>