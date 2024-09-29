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
#Quarta página(event.blade.php)
Route::get('/event', function(){
    return view('event');
});
/*Quinta página, agora passa parâmetros na rota
Route::get('/produtos/{id}', function($id){
    return view('route', ['id' => $id]);
});*/
#Sexta página, agora passa parâmetros com ?
Route::get('/id-rou/{id?}', function($id = null){
    return view('id-route', ['id' => $id]);
});
#Sétima página, passando parâmetros na requisição para exibir
Route::get('/produtos', function(){
    $searchReq = request('search');
    return view('route' , ['search' => $searchReq]);
});