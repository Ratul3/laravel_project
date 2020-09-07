<!DOCTYPE html>
<html>
<head>
	<title>CHECK NOTES</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<h1>CHECK NOTES</h1>

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>file</th>
			<th>date</th>
			<th>operation</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->name}}</td>
			<td><a href="/upload/{{$users[$i]->file}}">{{$users[$i]->file}}</a></td>
			
		    <td>{{$users[$i]->date}}</td>
			<td>
				
				<a href="{{route('home.notesdelete', [$users[$i]->id])}}">Delete</a>
			</td>
		</tr>
	@endfor
	</table>
	<br/>
	<a href="{{route('home.fileupload')}}">Back</a> 
<a href="{{route('home.index')}}">Go To Home Page</a>
</fieldset>
</body>
</html>