<!DOCTYPE html>
<html>
<head>
	<title>UPLOADED QUESTIONS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>UPLOADED QUESTIONS</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>question</th>
			<th>date</th>
			<th>operation</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->name}}</td>
			<td>{{$users[$i]->question}}</td>
			<td>{{$users[$i]->date}}</td>
		
			<td>
				<a href="{{route('home.qdelete', [$users[$i]->id])}}">Delete</a>
			</td>
		</tr>
	@endfor
	</table>
	<br/>
	<a href="{{route('home.takeexam')}}">Back</a> 
<a href="{{route('home.index')}}">Go To Home Page</a>
</fieldset>
</body>
</html>