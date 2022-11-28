@extends('navbar')
@section('navbar', 'Book Detail')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="booklist">
        <h2>Book Detail</h2>
    </div>
    <div class="bookdetail">
        <img src={{ $book->image }} alt="">
        <p>Title : {{ $book->title }}</p>
        <p>Author : {{ $book->author }}</p>
        <p>Publisher : {{ $book->publisher->name}}</p>
        <p>Year : {{ $book->year }}</p>
        <p>Synopsis</p>
        <p>{{ $book->synopsis }}</p>
        <br>
    </div>

</body>
@include('footer')
</html>
@endsection
