<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>User List</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>Type</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->userId }}</td>
			<td>{{ $std->username }}</td>
			<td>{{ $std->type }}</td>
			<td>{{ $std->password }}</td>
			<td>
				<a href="{{ route('student.edit', $std->userId) }}"> EDIT </a> | 
				<a href="{{ route('student.delete', $std->userId) }}"> DELETE </a> | 
				<a href="{{ route('student.details', $std->userId) }}"> Details </a>
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>