<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/',[UsuarioController::class,'cadastrar']);




Route::get('contato', function () {
    return 'Minha segunda rota';
});


