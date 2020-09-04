<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<body>

	<fieldset>
	<legend><h1>PROFILE</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			
			
			<th>username</th>
			
			<th>password</th>
			
			<th>operation</th>
			
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			
			<td>{{$users[$i]->username}}</td>
			
			<td>{{$users[$i]->password}}</td>
			
		
			<td>
				<a href="{{route('home.pedit', [$users[$i]->id])}}">Edit</a>
				
			</td>
		</tr>
	@endfor
	</table>
	<br/>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>