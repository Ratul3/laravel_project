<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<fieldset>
	<h1>LOGIN</h1>
	
	<form method="post">

		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="{{route('registration.index')}}">Registration</a></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	{{session('msg')}}
	</fieldset>
</body>
</html>