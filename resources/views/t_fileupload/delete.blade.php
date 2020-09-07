<!DOCTYPE html>
<html>
<head>
	<title>DELETE NOTES</title>
</head>
<body>
<fieldset>
	<h1>DELETE NOTES</h1>
	

	<form method="post">
		@csrf
		<table border="1">
			<tr>
				<td>name</td>
				<td>{{$user['name']}}</td>
			</tr>
			<tr>
				<td>file</td>
				<td>{{$user['file']}}</td>
			</tr>

		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.checknotes')}}">Back</a>
</body>
</html>