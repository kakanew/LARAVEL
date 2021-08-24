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

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'Principal']);

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'Contato']);

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'SobreNos']);

// nome, categoria, assunto, mensagem

Route::get('/contato/{nome}/{categoria_id}',
function(   
    string $nome = 'Desconhecido', 
    int $categoria_id = 1 // 1 - 'Informação'
) {
    echo "Estamos aqui: $nome - $categoria_id";
}
)->where('categoria_id','[0-9]+')->where('nome', '[A-Za-z]+');