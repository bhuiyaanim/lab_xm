<!DOCTYPE html>
<html>
<head>
	<title>Add Foods</title>
</head>
<body>
	<h1 align="center">Add Foods</h1>
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
			<td style="display:none;"><input type="text" name="spaceId">{{$std['spaceId']}}</td>
		</tr>
		<tr>
			<td style="display:none;"><input type="text" name="rname" value="{{$std['name']}}"></td>
		</tr>
		<tr>
			<td>Resturent Name : {{$std['name']}}</td>
		</tr>
		<tr></tr>
		<tr>
			<td>Food Name</td>
		</tr>
		<tr>
			<td><input type="text" name="name" size="35" placeholder="Enter the food name"></td>
		</tr>
		
		<tr align="top">
			<td>Details</td>
		</tr>
		<tr>
			<td><input type="text" name="details" size="35" style="height:150px" placeholder="Enter Details of the food"></td>
		</tr>
		<tr>
			<td>Price</td>
		</tr>
		<tr>
			<td><input type="text" name="price" size="35" placeholder="Enter Price of the food"></td>
		</tr>
		

		<tr></tr>
		<tr></tr>
		<tr></tr>
		<tr></tr>

		
		<tr align="center">
			<td><input type="submit" name="save" value="Add" style="height:25px; width:110px"></td>
		</tr>
	</table>
</form>

	<div align="center">
			{{session('msg')}}
	</div>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach




</body>
</html>