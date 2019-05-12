<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>IELTS Training</title>
</head>
<body>
    <header>
        <div class="title">
            <h1>
                <a href="/home">IELTS Training</a>
                <i class="canada fab fa-canadian-maple-leaf"></i>
            </h1>
        </div>
        @guest
        @else
        <nav class="mynav">
            <ul>
                <li><a href="{{ url('post') }}">Posts</a></li>
                <li><a href="{{ url('quiz') }}">Quiz</a></li>
                <li><a href="{{ url('words') }}">Vocabrary</a></li>
                <li><a href="#">EditPlan</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
            </ul>
        </nav>
        @endguest
    </header>
    <main id="app">
        @yield('content')
    </main>
    <footer>
        <p>&copy; Takuko&uni</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>