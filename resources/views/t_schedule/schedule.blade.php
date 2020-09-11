<!DOCTYPE html>
<html>
<head>
	<title>SCHEDULE</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>SCHEDULE</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>day</th>
			<th>time</th>
			<th>operations</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->name}}</td>
			<td>{{$users[$i]->day}}</td>
			<td>{{$users[$i]->time}}</td>
		
			<td>
				<a href="{{route('home.scheduleedit', [$users[$i]->id])}}">Edit</a> |
				<a href="{{route('home.scheduledelete', [$users[$i]->id])}}">Delete</a>
			</td>
		</tr>
	@endfor
	</table>
	<br/>
	<a href="{{route('home.scheduleinsert')}}">Insert</a> 
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>