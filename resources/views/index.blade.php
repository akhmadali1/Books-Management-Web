@extends('navbar')
@section('navbar', 'Home')
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
        <h2>Book List</h2>
    </div>
    <div class="container">
        @foreach ($books as $book)
            <div class="card">
                <img src={{ $book->image }} alt="">
                <h5>{{ $book->title }}</></h5>
                <h6>by</h6>
                <h5>{{ $book->author }}</h5>
                <a href="/{{ $book->id }}">Detail</a>
            </div>
        @endforeach
    </div>
</body>
@include('footer')
</html>
@endsection
