<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD QUESTIONS</title>
</head>
<body>
<fieldset>
	<h1>UPLOAD QUESTIONS</h1>
	

	<form method="post">
		
		{{csrf_field()}}
		<table>
		<tr><td>Name</td>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
	<tr>
				<td>Question</td>
				<td><input type="text" name="question" value="{{old('question')}}"></td>
			</tr>
		<tr><td>Date</td>
		<td><input type="date" name="date" value="{{old('date')}}"></td>
		</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Save"></td>
				<td><a href="{{route('home.questions')}}">Check Questions</a></td>
			</tr>
		</table>
		
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<a href="{{route('home.exam')}}">Back</a>
	</fieldset>
</body>
</html>