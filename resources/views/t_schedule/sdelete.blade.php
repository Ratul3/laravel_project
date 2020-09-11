<!DOCTYPE html>
<html>
<head>
	<title>DELETE SCHEDULE</title>
</head>
<body>
<fieldset>
	<h1>DELETE SCHEDULE</h1>
	

	<form method="post">
		@csrf
		<table border="1">
			<tr>
				<td>name</td>
				<td>{{$user['name']}}</td>
			</tr>
			<tr>
				<td>day</td>
				<td>{{$user['day']}}</td>
			</tr>
<tr>
				<td>time</td>
				<td>{{$user['time']}}</td>
			</tr>

		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.schedule')}}">Back</a>
</body>
</html>