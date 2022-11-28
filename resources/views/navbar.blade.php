<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('navbar')</title>
    <link rel="stylesheet" href="css/navfoot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
    <div class="box">
        <h1>Giant Book Suplier</h1>
    </div>
    <nav class="navbar">
        <a href="/">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Category
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                @foreach ($categories as $category)
                     <a href="/category/{{ $category->id }}">{{$category->name}}</a>
                @endforeach
            </div>
        </div>
        <a href="/publisher">Publisher</a>
        <a href="/contact">Contact</a>
    </nav>
</header>
<body>
    @yield('content')
</body>
</html>
