<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles\menuStyle.css">
    <title>Ассортимент</title>
</head>
<body>
    <header>
    <div class="header-container">
    <h1>Пельмени</h1>
    <div class="menu">

    </div>
    <div class="bt1">
    <b> <a href="{{Url('/reg')}}">Регистрация</a></b>
    <b><a href="">Войти</a></b>
    </div>
    </header>
    <main>
    <div class="main-container">
    @foreach ($data->take(2) as $item)
    <div class="block">

        <h1>{{$item -> title}}</h1>
        <img src="{{$item -> image}}" alt="" srcset="">
        <p>{{$item -> descripton}}</p>
        <h3>Как готовят</h3>
        <p>{{$item -> recipe}}</p>
    </div>
@endforeach
    </main>
    <footer>
    <div class="footer-container">
        Все права защещены! <br>
        Калуга 2022
    </div>
    </footer>
</body>
</html>