<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<fieldset>

	<marquee><h1>WELCOME HOME {{session('username')}}</h1></marquee>
	
</fieldset>
<br/><br/>
<center><a href="{{route('home.tprofile')}}">Profile</a></center><br/>
<center><a href="{{route('home.fileupload')}}">Upload Notes</a></center><br/>
<center><a href="{{route('home.salary')}}">Salary</a></center><br/>
<center><a href="{{route('logout.index')}}">logout</a></center>

</body>
</html>