<!DOCTYPE html>
<html lang="en-uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="/js/event.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
       <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
            <img src="../img/koalas.png" alt="koalas">
        </a>
        <ul class="navbar-nav">
            <li class="nav-iten">
                <a href="/" class="nav-link">Eventos</a></li>
            <li class="nav-iten">
                <a href="/" class="nav-link">Criar eventos</a></li>
            <li class="nav-iten">
                <a href="/" class="nav-link">Entrar</a></li>
            <li class="nav-iten">
                <a href="/" class="nav-link">Cadastrar</a></li>
        </ul>
       </div> 
    </nav>
</header>
<main>
    <h1>Título</h1>
    <img src="../img/people-watch-min.jpg" alt="eople-watch">
 </main>
    @yield('content')
<footer>
        <p>HDC Events &copy; 2020</p>
</footer>
</body>
</html>