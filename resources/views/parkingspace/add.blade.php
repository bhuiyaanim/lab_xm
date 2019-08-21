<!DOCTYPE html>
<html>
<head>
	<title>Create Resturent</title>
</head>
<body>
	<h1 align="center">Add Resturent</h1>
	<div align="center">
		<a href="{{route('home.index')}}">Home</a> |
		<a href="{{route('parkingspace.spaceList')}}">Resturent List</a> |
		<a href="/logout">Logout</a>
	</div>
	<br>
	
<form method="post">
	@csrf	
	<table align="center">
		<tr>
			<td>Resturent Name</td>
		</tr>
		<tr>
			<td><input type="text" name="name" size="35" placeholder="Enter name of the parking space"></td>
		</tr>
		
		<tr>
			<td>House No.</td>
		</tr>
		<tr>
			<td><input type="text" name="houseNo" size="35" placeholder="Enter house number"></td>
		</tr>
		<tr>
			<td>Road No.</td>
		</tr>
		<tr>
			<td><input type="text" name="roadNo" size="35" placeholder="Enter road number"></td>
		</tr>
		<tr>
			<td>Area</td>
		</tr>
		<tr>
			<td><input type="text" name="area" size="35" placeholder="Enter area"></td>
		</tr>
		<tr>
			<td>Contact Number</td>
		</tr>
		<tr>
			<td><input type="text" name="number" size="35" placeholder="Enter contact number, ex:01*********"></td>
		</tr>
		
		<tr></tr>
		<tr></tr>
		<tr>
			<td align="center"><input type="submit" name="save" value="Add" style="height:25px; width:110px"></td>
		</tr>
	</table>
</form>

	<div align="center">
			{{session('msg')}}
	</div>

<div align="center">
	@foreach($errors->all() as $err)
	{{$err}} <br>
	@endforeach
	
</div>




</body>
</html>