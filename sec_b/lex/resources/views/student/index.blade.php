<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User List</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>

	<!--  @for($i=0; $i < count($users); $i++)
		<tr>
			<td>{{$users[$i]['id']}}</td>
			<td>{{$users[$i]['username']}}</td>
			<td>{{$users[$i]['password']}}</td>
			<td>
				<a href="/user/edit/{{ $users[$i]['id'] }}">Edit</a> | 
				<a href="/user/delete/{{ $users[$i]['id'] }}">Delete</a> | 
				<a href="{{route('student.details', $users[$i]['id'])}}">Details</a>
			</td>
		</tr>
	@endfor -->

	 @foreach($users as $std)
		<tr>
			<td>{{$std['id']}}</td>
			<td>{{$std['username']}}</td>
			<td>{{$std['password']}}</td>
			<td>
				<a href="{{route('student.edit', [$std['id']])}}">Edit</a> | 
				<a href="{{route('student.delete', [$std['id']])}}">Delete</a> | 
				<a href="{{route('student.details', [$std['id']])}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>