<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User Details</h1>
	<a href="/user/userList">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td><%= id %></td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td><%= username %></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><%= password %></td>
		</tr>

	</table>


</body>
</html>