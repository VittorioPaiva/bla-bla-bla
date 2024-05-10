<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\\Http\\Controllers\\PrincipalController@principal');

Route::get('/sobre-nos', 'App\\Http\\Controllers\\SobreNosController@sobreNos');

Route::get('/contato', 'App\\Http\\Controllers\\ContatoController@contato');