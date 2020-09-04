<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PROFILE</title>
</head>
<body>
<fieldset>
	<h1>UPDATE PROFILE</h1>

	
	<form method="post">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>name</td>
				<td><input type="text" name="username" value="{{$user['username']}}"></td>
			</tr>

			

			<tr>
				<td>password</td>
				<td><input type="password" name="password" value="{{$user['password']}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>
	<br/>
	<a href="{{route('home.tprofile')}}">Back</a>
	</fieldset>
</body>
</html>