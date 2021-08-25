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

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'Principal'])->name('site.index');

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'Contato'])->name('site.contato');

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'SobreNos'])->name('site.sobrenos');
Route::get('/login', function(){return 'Login';})->name('site.lo');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedor');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'Teste'])->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para página inicial.';
});