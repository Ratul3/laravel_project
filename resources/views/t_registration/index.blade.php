<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
<fieldset>
	<h1>REGISTRATION</h1>
	<font color='red'>**Reuirement of the field </font><a href="{{route('rules.index')}}">Rules</a>

	<form method="post" enctype="multipart/form-data">
		
		{{csrf_field()}}
		
		<table>	
		<tr>
		<td><b>Username</b></td>
		<td><input type="text" name="username" value="{{old('username')}}"></td>
		<td> </td>
		<td> </td>
		<td> </td>
		</tr>
		<tr>
			<td><b>Password</b></td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
			<td> </td>
			<td> </td>
			<td> </td>
			</tr>
		<tr>	
		<td><b>Email</b></td>
		<td><input type="email" name="email" value="{{old('email')}}"></td>
		<td> </td>
		<td> </td>
		<td> </td>
		</tr>
				
			
	<tr>
	<td><b>Gender</b></td>
	<td><input type="radio" name="gender" value="M">Male
	<input type="radio" name="gender" value="F">Female</td>
	<td> </td>
	<td> </td>
	<td> </td>
		</tr>
			
			
			<tr>
			<td><b>Education</b></td>
			<td><input type="radio" name="education" value="ssc">S.S.C
			<input type="radio" name="education" value="hsc">H.S.C
			<input type="radio" name="education" value="bsc">B.Sc</td>
						<td> </td>
						<td> </td>
						<td> </td>
						</tr>
				<tr>
				<td><b>User Type	</b></td>	
				<td><input type="radio" name="type" value="admin" />Admin
						<input type="radio" name="type" value="tp" />Tution Provider
						<input type="radio" name="type" value="teacher" />Teacher
						<input type="radio" name="type" value="student" />Student</td>
						<td> </td>
						<td> </td>
						<td> </td>
						</tr>
					<tr>
	<td><b>Picture</b></td>
	<td><input type="file" name="myfile"></td>
	<td> </td>
	<td> </td>
	<td> </td>
		</tr>	
						
				<tr>
				<td> </td>
				<td><input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="reset">
				<a href="{{route('login.index')}}">Login</a></td>
				
				<td> </td>
				<td> </td>
				<td> </td>
			</tr>
	</table>
		
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	
	</fieldset>
</body>
</html>