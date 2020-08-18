<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Delete Page</h1>
	<a href="{{route('student.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td>{{$std['username']}}</td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td>{{$std['password']}}</td>
		</tr>
	</table>

<form method="post">
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>