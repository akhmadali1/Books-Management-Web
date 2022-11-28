@extends('navbar')
@section('navbar', 'Category')
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
        @php
            $i = 0;
        @endphp
        @foreach ($categori as $row)
            <h2>{{ $row->name }}</></h2>
            @if ($i == 0)
                @php
                    break;
                @endphp
            @endif
            @php
                $i++;
            @endphp
        @endforeach
    </div>
    <div class="container">
        @foreach ($categori as $book)
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
<style>
    .box{
/* position: fixed; */
left: 0;
top: 0;
text-align: center;
background-color: orange;
height: 100px;
margin-top: -30px;
width: 100.8%;
margin-left: -7px;
}
.box h1{
padding-top: 30px;
font-size: 40px;
color: white;
font-weight: lighter;
}
.navbar {
overflow: hidden;
font-family: Arial;
margin-top: 10px;
margin-left: 575px;
}
.navbar a {
float: left;
font-size: 16px;
color: blue;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
.dropdown {
float: left;
overflow: hidden;
}
.dropdown .dropbtn {
font-size: 16px;
border: none;
outline: none;
color: blue;
padding: 14px 16px;
background-color: inherit;
font-family: inherit;
margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
background-color: #ddd;
}
.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown-content a {
float: none;
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
text-align: left;
}
.dropdown-content a:hover {
background-color: #ddd;
}
.dropdown:hover .dropdown-content {
display: block;
}
.footer {
position: fixed;
left: 255px;
bottom: 0;
height: 3%;
width: 65%;
background-color: blue;
color: white;
text-align: center;
}
.footer h6{
margin-top: 5px;
}
    * {
box-sizing: border-box;
}
.booklist{
color: white;
background-color: grey;
text-align: left;
width: 50%;
margin-left: 400px;
}
.booklist h2{
padding-left: 5px;
font-weight: lighter;
}
.container{
position: relative;
margin-left: 400px;
justify-content: center;
align-items: center;
}
.container > .card{
padding: 3px;
}
.container .card{
float: left;
height: 25%;
padding: 5px;
border: 1px solid gray;
}
.container .card img{
width: 178px;
height: 350px;
}
.container .card a{
background-color: blue;
color: white;
padding: 5px 10px;
text-decoration: none;
font-size: 10px;
margin: 3px;
margin-bottom: 50px;
text-decoration: none;
font-weight: lighter;
}
.container .card h5,h6{
margin: 5px;
margin-left: 5px;
text-decoration: none;
font-weight: lighter;
}
</style>
@endsection
