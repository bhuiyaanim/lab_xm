<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	
	<h1 align="center">Home Page</h1>
	<br>
	<h2>Welcome {{session('name')}}</h2>

	<a href="{{route('parkingspace.index')}}">Resturent</a> |
	<a href="{{route('booking.index')}}">User</a> |
	<a href="{{route('parkingspace.profile')}}">Profile</a> |
	<a href="/logout">Logout</a>	

</body>
</html>