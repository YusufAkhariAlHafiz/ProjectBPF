<!DOCTYPE html>
<html>

<head>
</head>

<body>

        <h3>Edit User</h3>

    <a href="/admin"> Kembali</a>

    <br />
    <br />
    @foreach($user as $p)
    <form action="/admin/updateUser" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->user_id }}"> <br/>
        Nama <input type="text" name="nama" value="{{ $p->nama }}" required="required"> <br />
        Password <input type="password" name="password" value="{{ $p->password }}" required="required"> <br />
        Email <input type="email" name="email" value="{{ $p->email }}" required="required"> <br />
        Role <input type="text" name="role" value="{{ $p->role }}" required="required"> <br />
        Status <input type="text" name="status" value="{{ $p->status }}" required="required"> <br />
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>

</html>