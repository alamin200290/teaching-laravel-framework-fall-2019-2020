<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<h1>Details </h1>

	<a href="/user/userlist">Back</a> |
	<a href="/logout">logout</a>

<br><br>

<form method="post">
	<table border="0">
		<tr>
			<td>Username :</td>
			<td><%= user.username %></td>
		</tr>
		<tr>
			<td>PASSWORD :</td>
			<td><%= user.password %></td>
		</tr>
		
	</table>
</form>
</body>
</html>