<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (auth()->user()->gender === 'laki-laki')
    <img src="/img/male.png" width="200" height="200" alt="foto laki">
    @else
    <img src="/img/female.png" width="200" height="200" alt="foto perempuan">
    @endif
    <ul>
        <li>
            <p><b>Nama : </b>{{ auth()->user()->nama }}</p>
        </li>
        <li>
            <p><b>NIP : </b>{{ auth()->user()->NIP }}</p>
        </li>
        <li>
            <p><b>Alamat : </b>{{ auth()->user()->alamat }}</p>
        </li>
        <li>
            <p><b>Gender : </b>{{ auth()->user()->gender }}</p>
        </li>
        <li>
            <p><b>Nomer Telepon : </b>{{ auth()->user()->no_telp }}</p>
        </li>
    </ul>
    <button><a href="/home">Kembali</a></button>
</body>

</html>