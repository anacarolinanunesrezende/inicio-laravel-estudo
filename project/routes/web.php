<?php

use Illuminate\Support\Facades\Route;

#Página inicial(welcome.blade.php)
Route::get('/', function () {
    #return view('welcome');

    $name = 'josemar';
    $age = 52;
    $list = [10,06,90];
    $listNickname = ["Gatinha" , "Memeal"];

    return view('welcome', [
        'name' => $name, 
        'age' => $age,
        'list' => $list,
        'listNickname' => $listNickname
    ]);
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