<!DOCTYPE html>
<html>
<head>
    <title>Laravel Mail</title>
</head>
<body>
    <h1>{{ $data['title'] }}</h1>
    <p>-------------------</p>
    <h2>Nama Pengirim : {{ $data['nama'] }}</h2>
    <h2>Email : {{ $data['email'] }}</h2>
    <h2>Deskripsi :</h2>
    <p>{{ $data['body'] }}</p>
    <br>
    <p>-----------------</p>
    <p>Orderan dari Website</p>
    <p>Konfirmasi Orderan dengan mengirim pesan konfirmasi ke Email Customer {{ $data['email'] }}</p>
    
</body>
</html>