<!DOCTYPE html>
<html>
<head>
	<title>Resturent List</title>
</head>
<body>

	<h1 align="center">Resturent List</h1>
	
	<div align="center">
		<a href="{{route('home.index')}}">Home</a> |
		<a href="{{route('parkingspace.add')}}">Add Resturent</a> |
		<a href="/logout">Logout</a>
	</div>
	
	<br>

	<div align="center">
		<h3 align="center">Total Parking Space : {{$count}}</h3>
	</div>


	<br>
	<table border="1" align="center">
		<tr align="center">
			<td>NO</td>
			<td>NAME</td>
			<td>Location</td>
			<td>Contact No.</td>
			<td>Activity</td>
		</tr>

		@php ($i = 1)
		@foreach ($stdlist as $s) 
			
			<tr>
				<td>{{$i}}</td>
				<td style="display:none;">{{$s['id']}}</td>
				<td>{{$s['name']}}</td>
				<td>
					{{$s['houseNo']}}, {{$s['roadNo']}}, {{$s['area']}}
				</td>
				<td>{{$s['number']}}</td>
				<td>
					<a href="{{route('parkingspace.details', $s['spaceId'])}}">Details</a> |
					<a href="{{route('parkingspace.edit', $s['spaceId'])}}">Edit</a> |
					<a href="{{route('booking.add', $s['spaceId'])}}">Add Foods</a> |
					<a href="{{route('parkingspace.delete', $s['spaceId'])}}">Delete</a> 
				</td>
			</tr>
		@php ($i++)
		@endforeach


	</table>

	
		

</body>
</html>