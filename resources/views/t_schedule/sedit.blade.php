<!DOCTYPE html>
<html>
<head>
	<title>UPDATE SCHEDULE</title>
</head>
<body>
<fieldset>
	<h1>UPDATE SCHEDULE</h1>

	
	<form method="post">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$user['name']}}"></td>
			</tr>

			

			<tr>
				<td>Day</td>
				<td><input type="text" name="day" value="{{$user['day']}}"></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="text" name="time" value="{{$user['time']}}"></td>
			</tr>
			
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
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