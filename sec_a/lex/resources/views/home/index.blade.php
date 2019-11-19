<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>

	<br>
	<a href="/user/adduser">Add User</a> |
	<a href="{{ route('student.index') }} ">User List</a> |
	<a href="/logout">logout</a>

</body>
</html>