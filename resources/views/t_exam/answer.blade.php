<!DOCTYPE html>
<html>
<head>
	<title>ANSWERS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>ANSWERS</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>question</th>
			<th>answer</th>
			<th>date</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->name}}</td>
			<td>{{$users[$i]->question}}</td>
			<td>{{$users[$i]->reply}}</td>
			<td>{{$users[$i]->date}}</td>
		</tr>
	@endfor
	</table>
	<br/>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>