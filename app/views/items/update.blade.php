<html>
<head>
	<title>Update Item</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
</head>
<body>
	<h1>Update Item : {{ $item->id }} {{ $item->name }}</h1>
	<form action="{{URL::Route('items.edit')}}" method="post"> 
		
		<input type="hidden" name="id" value="{{$item->id}}">
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