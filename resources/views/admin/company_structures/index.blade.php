<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Structures</title>
</head>
<body class="p-3">
	<table border="1px" class="table table-bordered">
		<thead class="table-dark text-center">
			<tr>
			<th>id</th>
			<th>Nama Structur</th>
			<th>Jabatan</th>
			<th>image url</th>
			<th>admin id</th>
			<th>nama admin</th>
			<th>Aksi</th>
	
		</tr>
	</thead>
	<tbody>
		@foreach ($data_company_structures as $person)
		<tr>
				<td class="text-center">{{ $person->person_id }}</td>
				<td>{{ $person->person_name }}</td>
				<td>{{ $person->person_position }}</td>
				<td><a href="{{ $person->person_image_url }}" target="_blank">{{ $person->person_image_url }}</a></td>
				<td>{{ $person->admin_id }}</td>
				<td>
					@if ($person->Admin)
							{{ $person->Admin->admin_username }}
						@else
							No admin information available
						@endif
				</td>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
