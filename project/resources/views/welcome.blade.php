<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="">
        <p>oi</p>
        <p>{{$name}}</p>
        <!--Não precisa por chaves-->
        @if($name == 'marco aurelio')
            <p>nome errado</p>
        @else
            <p>nome correto</p>
        @endif
    </body>
</html>
