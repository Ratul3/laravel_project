<!DOCTYPE html>
<html>
<head>
	<title>UPDATE SALARY</title>
</head>
<body>
<fieldset>
	<h1>UPDATE SALARY</h1>

	
	<form method="post">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>name</td>
				<td><input type="text" name="name" value="{{$user['name']}}"></td>
			</tr>

			

			<tr>
				<td>salary</td>
				<td><input type="text" name="salary" value="{{$user['salary']}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>
	<br/>
	<a href="{{route('home.salary')}}">Back</a>
	</fieldset>
</body>
</html>