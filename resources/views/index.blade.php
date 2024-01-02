<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data User</h3>
 
	<a href="/admin/tambahUser"> + Tambah User Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Role</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($user as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->email }}</td>
			<td>{{ $p->password }}</td>
			<td>{{ $p->role }}</td>
			<td>{{ $p->status }}</td>
			<td>
				<a href="/admin/editUser/{{ $p->user_id }}">Edit</a>
				|
				<a href="/admin/hapusUser/{{ $p->user_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>