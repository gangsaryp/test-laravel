<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Category</title>
</head>
<body>
    <h1>Tambah Category</h1>
    <br/>
    <form action="/categories/store" method="POST">
        {{ csrf_field() }}
        <label >Nama</label>
        <input type="text" name="name" placeholder="Nama">
        <br/>
        <input type="submit" value="Save">
    </form>
</body>
</html>