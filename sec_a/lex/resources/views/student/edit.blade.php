<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>Edit user</h1>

	<a href="/user/userlist">Back</a> |
	<a href="/logout">logout</a>

<br><br>

<form method="post">
	<table border="0">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="<%=user.username%>"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" value="<%=user.password%>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>