<?php

use Illuminate\Support\Facades\Route;

#Página inicial(welcome.blade.php)
Route::get('/', function () {
    #return view('welcome');

    $name = 'josemar';
    $age = 52;

    return view('welcome', ['name' => $name, 'age' => 52]);
});
#Segunda página(contact.blade.php)
Route::get('/contact', function(){
    return view('contact');
});
#Terceira página(produtos.blade.php)
Route::get('/produtos', function(){
    return view('produtos');
    #Ou return view('contact');->Mostra o conteúdo dessa página com a url contendo o nome /produtos
});