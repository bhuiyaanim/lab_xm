<!DOCTYPE html>
<html>
<head>
	<title>Booking Details</title>
</head>
<body>
	<h1 align="center">Food Details</h1>
	<div align="center">
		<a href="{{route('home.index')}}">Home</a> |
		<a href="{{route('parkingspace.spaceList')}}">Resturent List</a> |
		<a href="{{route('booking.total')}}">Food List</a> |
		<a href="/logout">Logout</a>	
	</div>
	
	<br>
	
	<table align="center">
		<tr>
			<td>Booking Id : </td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Resturent Name : </td>
			<td>{{$std['rname']}}</td>
		</tr>
		<tr>
			<td>Name : </td>
			<td>{{$std['name']}}</td>
		</tr>
		<tr>
			<td>Price : </td>
			<td>{{$std['price']}} taka</td>
		</tr>
	</table>
	
</body>
</html>