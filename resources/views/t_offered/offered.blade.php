<!DOCTYPE html>
<html>
<head>
	<title>OFFERED TUITION</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>OFFERED TUITION</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>area</th>
			<th>class</th>
			<th>subject</th>
			<th>salary</th>
			<th>tuition_provider</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->area}}</td>
			<td>{{$users[$i]->class}}</td>
			<td>{{$users[$i]->subject}}</td>
			<td>{{$users[$i]->salary}}</td>
			<td>{{$users[$i]->tuition_provider}}</td>
		</tr>
	@endfor
	</table>
	<br/>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>