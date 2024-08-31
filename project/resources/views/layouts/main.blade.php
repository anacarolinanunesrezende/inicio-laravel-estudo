<!DOCTYPE html>
<html lang="en-uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/event.js"></script>

    @yield('content')
    <footer>
        <p>HDC Events &copy; 2020</p>
    </footer>
</body>
</html>