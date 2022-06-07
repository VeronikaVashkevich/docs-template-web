<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href={{asset("css/app.css")}}>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favico.png') }}">
    <title>@yield('title')</title>
</head>

<body>
@section('header')
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Главная</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Документы
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('templates', ['template' => 'form1']) }}">Форма
                                1</a></li>
                        <li><a class="dropdown-item"
                               href="{{ route('templates', ['template' => 'marriageContract']) }}">Брачный
                                договор</a></li>
                        <li><a class="dropdown-item"
                               href="{{ route('templates', ['template' => 'authorContractDesigner']) }}">Авторский
                                договор с заказчиком</a></li>
                        <li><a class="dropdown-item"
                               href="{{ route('templates', ['template' => 'orderDistributionResponsibilities']) }}">Приказ о распределении обязанностей между руководством</a></li>
                    </ul>
                </li>
                @auth
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link" aria-current="page">Выйти</a>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link" aria-current="page">Войти</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link" aria-current="page">Регистрация</a>
                    </li>
                @endauth
            </ul>
        </header>
    </div>
@show
@section('content')

@show
</body>
</html>
