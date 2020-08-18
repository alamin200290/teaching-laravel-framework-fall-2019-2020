<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User Details</h1>
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
</body>
</html>