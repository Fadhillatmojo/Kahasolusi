<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table border="1px" class="table table-bordered">
		<thead class="table-dark text-center">
			<tr>
			<th>id</th>
			<th>Nama admin</th>
			<th>email</th>
			<th>password</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
		@foreach ($data_admin as $admin)
		<tr>
				<td class="text-center">{{ $admin->admin_id }}</td>
				<td>{{ $admin->admin_username }}</td>
				<td>{{ $admin->admin_email }}</td>
				<td>{{ $admin->admin_password }}</td>
				<td>
					<div class="d-flex flex-row justify-content-center">
						<button class="btn btn-success me-1">
							<a href="/" >Detail</a>
						</button>
						<button class="btn btn-warning me-1">
							<a href="/" >Update</a>
						</button>
						<form action="/" method="post">
							@csrf
							<button onClick="return confirm('yakin mau dihapus?')" class="btn btn-danger me-1">
								Hapus
							</button>
						</form>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
