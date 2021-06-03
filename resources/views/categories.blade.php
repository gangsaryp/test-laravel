<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
</head>
<body>
    <h1>List Data Kategori</h1>
    <br/>
    <a href="/categories/tambah">Create</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Is Publish</th>
        </tr>
        @foreach ($categories as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->name }}</td>
            <td>{{ $k->is_publish }}</td>
            <td>
                <a href="/categories/edit/{{ $k -> id }}">Edit</a>
                <a href="/categories/hapus/{{ $k -> id }}">hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br/>
    {{-- Page : {{ $categories -> link() }} --}}
</body>
</html>