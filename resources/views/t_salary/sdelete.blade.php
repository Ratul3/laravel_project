<!DOCTYPE html>
<html>
<head>
	<title>DELETE SALARY</title>
</head>
<body>
<fieldset>
	<h1>DELETE SALARY</h1>
	

	<form method="post">
		@csrf
		<table border="1">
			<tr>
				<td>name</td>
				<td>{{$user['name']}}</td>
			</tr>
			<tr>
				<td>salary</td>
				<td>{{$user['salary']}}</td>
			</tr>

		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.salary')}}">Back</a>
</body>
</html>