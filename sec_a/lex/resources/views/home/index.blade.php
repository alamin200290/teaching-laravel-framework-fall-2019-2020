<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>

	<br>
	<a href="{{route('student.add')}}">Add User</a> |
	<a href="{{ route('student.index') }} ">User List</a> |
	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>