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




Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
    return "Saludos ".$nombre;

});


Route::get('contacto',function(){
Return "Seccion de contactos";

})-> name('contactos');


Route::get('/namedroute',function(){
    echo "<a href='".route('contactos')."'> Contactos 1 </a><br>";
    echo "<a href='".route('contactos')."'> Contactos 2 </a><br>";
    echo "<a href='".route('contactos')."'> Contactos 3 </a><br>";
    echo "<a href='".route('contactos')."'> Contactos 4 </a><br>";
});

Route::get('/', function(){
    $nombre = 'Usuario';
   // return view('home')->with('nombre', "Camilo");
   return view('home', ['nombre' => $nombre]);
})-> name('home');

Route::view('/about','about')->name('about');

Route::view('/contact','contact')->name('contact');

Route::get('/portfolio','PortfolioController@index')->name('portfolio');

Route::resource('projects','PortfolioController');