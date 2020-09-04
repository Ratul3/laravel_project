<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>

	<h2>WELCOME HOME {{session('username')}}</h2>

<a href="{{route('home.tprofile')}}">Profile</a>
<a href="{{route('home.salary')}}">Salary</a>
<a href="{{route('logout.index')}}">logout</a>
</body>
</html>