<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

	<a href="{{route('student.add')}}">Add user</a> | 
	<a href="{{route('student.index')}}">UserList</a> | 
	<a href="/logout">logout</a>

	<table>
		<tr>
			<td>Name :</td>
			<td>{{$name}} </td>
		</tr>
		<tr>
			<td>ID :</td>
			<td>{{$id}}</td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td>{{$cgpa}}</td>
		</tr>
	</table>

</body>
</html>