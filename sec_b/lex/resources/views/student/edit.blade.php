<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Edit User</h1>
	<a href="{{route('student.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value="{{$std['username']}}"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="text" name="password" value="{{$std['password']}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>