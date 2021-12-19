<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
   
    return view('home');
})->name("firstpage");

Route::get("/pagellll",function(){
    return view("nome-pagina");
})->name("prova");


Route::get("/pagina2",function(){
    return view("pagina2");
})->name("paginaprova2");


Route::get("/pagina3", function(){
    $data = [
        'titolo'=>'lista regali',
       
        'lista_regali'=>[
            'telefono',
            'spumante',
            'candele',
            'pupazzo'
        ]
        ];
    return view("pagina3",$data);

})->name("paginaprova3");



Route::get("/pagina4", function(){
    return view("pagina4");

})->name("paginaprova4");