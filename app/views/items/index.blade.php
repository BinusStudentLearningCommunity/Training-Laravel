<html>
<head>
	<title>Items</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
</head>
<body>
	<div class="container-fluid">
		<h1 class="text-center">Stok Barang</h1>
		<a href="{{ URL::route('items.create') }}"><h2>Insert new item</h2></a>
		<table class="table table-bordered table-responsive">
			<thead>
				<td>id</td>
				<td>Name</td>
				<td>Price</td>
				<td>action</td>
			</thead>

			<tbody>

				@foreach( $items as $item )
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->price }}</td>
					<td>
						<span><a href="{{ URL::route('items.update', array('id' => $item->id)) }}" class="btn">update</a></span> <!--Cara 2: {{ URL::to('items/edit/'.$item->id) }} -->
						{{ Form::open(array('url' => 'items/destroy/' . $item->id)) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete', array('class' => 'btn')) }}
						{{ Form::close() }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>