<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <header>
        <div class="title">
            <h1>
                <a href="/home">IELTS training</a>
                <i class="canada fab fa-canadian-maple-leaf"></i>
            </h1>
        </div>
        <nav class="mynav">
            <ul>
                <li><a href="{{ url('posts') }}">Posts</a></li>
                <li><a href="#">Quiz</a></li>
                <li><a href="{{ url('words') }}">Vocabrary</a></li>
                <li><a href="#">EditPlan</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; Takuko&uni</p>
    </footer>
</body>
</html>