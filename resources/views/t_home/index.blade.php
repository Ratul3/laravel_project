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
<center><a href="{{route('home.availabletuition')}}">Available Tuition</a></center><br/>
<center><a href="{{route('home.offeredtuition')}}">Offered Tuition</a></center><br/>
<center><a href="{{route('home.fileupload')}}">Upload Notes</a></center><br/>
<center><a href="{{route('home.studentsinfo')}}">Students Information</a></center><br/>
<center><a href="{{route('home.salary')}}">Salary</a></center><br/>
<center><a href="{{route('home.teachersinfo')}}">Teachers Information</a></center><br/>
<center><a href="{{route('home.ctp')}}">Contact Tuition Provider</a></center><br/>
<center><a href="{{route('home.answer')}}">Answer Script</a></center><br/>
<center><a href="{{route('home.ratings')}}">Ratings & Review</a></center><br/>
<center><a href="{{route('logout.index')}}">Logout</a></center>

</body>
</html>