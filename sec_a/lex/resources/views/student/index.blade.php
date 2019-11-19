<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>User List</h1>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>

<!-- 	@for($i=0; $i< count($user); $i++)
		<tr>
			<td>{{ $user[$i]['id'] }}</td>
			<td>{{ $user[$i]['username'] }}</td>
			<td>{{ $user[$i]['password'] }}</td>
			<td>
				<a href="/user/edit/{{$user[$i]['id']}}"> EDIT </a> | 
				<a href="/user/delete/{{$user[$i]['id']}}"> DELETE </a> | 
				<a href="/user/details/{{$user[$i]['id']}}"> Details </a>
			</td>
		</tr>
	@endfor -->

	@foreach($user as $std)
		<tr>
			<td>{{ $std['id'] }}</td>
			<td>{{ $std['username'] }}</td>
			<td>{{ $std['password'] }}</td>
			<td>
				<a href="/user/edit/{{$std['id']}}"> EDIT </a> | 
				<a href="/user/delete/{{$std['id']}}"> DELETE </a> | 
				<a href="/user/details/{{$std['id']}}"> Details </a>
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>