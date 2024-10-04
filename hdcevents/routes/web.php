<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Outras telas
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/product' , function(){
/*
    $name = 'Wine'; 
    $price = 11.84;
    $array = ['name' => $name , 'price' => $price];*/
    $array = ['name' => 'Wine' , 'price' => 7.65];
    $lenght = count($array);
    //Primeiro é a key e epois o valor

    return view('product' ,
     $array , 
     $lenght);
});