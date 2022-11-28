@extends('navbar')
@section('navbar', 'Contact')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="booklist">
        <h2>Contact</h2>
    </div>
    <div class="bookdetail">
        <h2>Store address :</h2>
        <p>Jalan Pembangunan Baru Raya,</p>
        <p>Kompleks Pertokoan Emerald Blok III/12</p>
        <p>Bintaro, Tangerang Selatan</p>
        <p>Indonesia</p>
        <h2>Open Daily :</h2>
        <p>08.00 - 20.00</p>
        <h2>Contact :</h2>
        <p>Phone : 021-08899776655</p>
        <p>Email: happybookstore@happy.com</p>
        <br>
    </div>
</body>
@include('footer')
</html>
@endsection
