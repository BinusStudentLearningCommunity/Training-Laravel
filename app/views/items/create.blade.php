<html>
<head>
	<title>Create Items</title>
</head>
<body>
	<h1>Insert</h1>
	<form action="{{ URL::route('items.doPost') }}" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"/></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"/></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>