<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Add User</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
	<table border="1">
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td><input type="text" name="type" value=""></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Save"></td>
			<td></td>
		</tr>
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach	
</body>
</html>



