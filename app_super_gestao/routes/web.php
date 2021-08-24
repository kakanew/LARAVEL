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

Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
function(string $nome = 'Desconhecido', 
string $categoria = 'Opcional', 
string $assunto = 'Contato', 
string $mensagem = 'Mensagem não informada') {
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});