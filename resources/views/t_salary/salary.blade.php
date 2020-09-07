<!DOCTYPE html>
<html>
<head>
	<title>SALARY</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>SALARY</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>salary</th>
			<th>operations</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->name}}</td>
			<td>{{$users[$i]->salary}}</td>
		
			<td>
				<a href="{{route('home.sedit', [$users[$i]->id])}}">Edit</a> |
				<a href="{{route('home.sdelete', [$users[$i]->id])}}">Delete</a>
			</td>
		</tr>
	@endfor
	</table>
	<br/>
	<a href="{{route('home.sinsert')}}">Insert</a> 
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>