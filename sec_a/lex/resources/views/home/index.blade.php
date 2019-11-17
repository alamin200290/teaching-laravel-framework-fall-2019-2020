<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome home!</h1>

	ID: {{$id}}
	<br>
	Name: {{$name}}

	<br>
	<a href="/user/adduser">Add User</a> |
	<a href="/user/userlist">View User List</a> |
	<a href="/logout">logout</a>

</body>
</html>