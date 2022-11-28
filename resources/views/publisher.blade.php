@extends('navbar')
@section('navbar', 'Publisher')
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
    @foreach ($publishers as $publisher)
        <div id="portfolio">
            <div class="booklist">
                <h2>{{$publisher->name}}</h2>
                <h2>Address - {{$publisher->address}}</h2>
                <h2>Phone - {{$publisher->phone}}</h2>
                <h2>Email - {{$publisher->email}}</h2>
            </div>
                <div class="container">
                    @foreach ($publisher->book as $book)
                        <div class="card">
                            <img src={{ $book->image }} alt="">
                            <h5>{{ $book->title }}</></h5>
                            <h6>by</h6>
                            <h5>{{ $book->author }}</h5>
                            <a href="/{{ $book->id }}">Detail</a>
                        </div>
                    @endforeach
                    @for ($i = 1; $i <= 18; $i++)
                            <br>
                    @endfor
                </div>
        </div>
    @endforeach
</body>
@include('footer')
</html>
@endsection
