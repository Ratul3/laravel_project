<!DOCTYPE html>
<html>
<head>
	<title>DELETE QUESTION</title>
</head>
<body>
<fieldset>
	<h1>DELETE QUESTION</h1>
	

	<form method="post">
		@csrf
		<table border="1">
			<tr>
				<td>name</td>
				<td>{{$user['name']}}</td>
			</tr>
			<tr>
				<td>question</td>
				<td>{{$user['question']}}</td>
			</tr>
<tr>
				<td>date</td>
				<td>{{$user['date']}}</td>
			</tr>
		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.questions')}}">Back</a>
</body>
</html>