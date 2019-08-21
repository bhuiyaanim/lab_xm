<!DOCTYPE html>
<html>
<head>
	<title>Delete confirm</title>
</head>
<body>
	<h1 align="center">Delete Resturent</h1>
	<div align="center">
		<a href="{{route('home.index')}}">Home</a> |
		<a href="{{route('parkingspace.spaceList')}}">Resturent List</a> |
		<a href="/logout">Logout</a>	
	</div>
	
	<br>

	<table align="center">
		<tr>
			<td>Space Id : </td>
			<td>{{$std['spaceId']}}</td>
		</tr>
		<tr>
			<td>Name : </td>
			<td>{{$std['name']}}</td>
		</tr>
		<tr>
			<td>Location :</td>
			<td>{{$std['houseNo']}}, {{$std['roadNo']}}, {{$std['area']}}</td>
		</tr>
		<tr>
			<td>Contact No : </td>
			<td>{{$std['number']}}</td>
		</tr>
	</table>
	
	<div align="center">
		<form method="post">
			@csrf
			<h3>Are you sure?</h3>
			<a href="/stdList">
				<input type="button" value="Cancel">
			</a>
			<input type="hidden" name="sid" value="{{$std[0]}}">
			<input type="submit" name="delete" value="Confirm">
		</form>
	</div>
	
	
</body>
</html>


