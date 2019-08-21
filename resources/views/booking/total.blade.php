<!DOCTYPE html>
<html>
<head>
	<title>Booking List</title>
</head>
<body>

	<h1 align="center">Food List </h1>
	
	<div align="center">
		<a href="{{route('home.index')}}">Home</a> |
		<a href="{{route('booking.bookingList')}}">Total Bookings</a> |
		<a href="/logout">Logout</a>
	</div>
	
	<br>
	
	<div align="center">
		<h3 align="center">Total Bookings : {{$count}}</h3>
	</div>

	<table border="1" align="center">
		<tr align="center">
			<td>No</td>
			<td>Food Name</td>
			<td>Details</td>
			<td>Price</td>
			<td>Action</td>
		</tr>

		@php ($i = 1)
		@foreach ($newlist as $n) 
			
			<tr>
				<td>{{$i}}</td>
				<td style="display:none;">{{$n['spaceId']}}</td>
				<td style="display:none;">{{$n['rname']}}</td>
				<td>{{$n['name']}}</td>
				<td>{{$n['details']}}</td>
				<td>{{$n['price']}}</td>
				<td>
					<a href="{{route('booking.details', $n['id'])}}">Details</a> |
					<a href="{{route('booking.edit', $n['id'])}}">Edit</a> |
					<a href="{{route('booking.delete', $n['id'])}}">Delete</a>
				</td>
			</tr>
		@php ($i++)
		@endforeach


	</table>
		

</body>
</html>