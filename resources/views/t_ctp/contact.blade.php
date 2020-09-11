<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>CONTACT</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			
		
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->username}}</td>
			<td>{{$users[$i]->email}}</td>
		
			
		</tr>
	@endfor
	</table>
	<br/>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>