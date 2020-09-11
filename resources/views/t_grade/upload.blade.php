<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD GRADES</title>
</head>
<body>
<fieldset>
	<h1>UPLOAD GRADES</h1>
	

	<form method="post">
		
		{{csrf_field()}}
		<table>
		<tr><td>Name</td>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
	<tr>
				<td>Grade</td>
				<td><select name="grade">
					<option value="A+">A+</option>
					<option value="A">A</option>
				
					<option value="B+">B+</option>
					<option value="B">B</option>
					
					<option value="C+">C+</option>
					<option value="C">C</option>
					
					<option value="D+">D+</option>
					<option value="D">D</option>
					
					<option value="F">F</option>
				</select></td>
			</tr>
		<tr><td>Date</td>
		<td><input type="date" name="date" value="{{old('date')}}"></td>
		</tr>
			
			<tr>
				
				<td><input type="submit" name="submit" value="Save"></td>
				<td><a href="{{route('home.checkgrades')}}">Check Grades</a></td>
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