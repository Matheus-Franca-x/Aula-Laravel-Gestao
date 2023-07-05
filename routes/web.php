<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return "Olá";
// });
// Route::get('/sobre-nos', function () {
//     return "Sobre nós";
// });
// Route::get('/contato', function () {
//     return "Contato";
// });

// Route::get('contato/{nome}/{categoria_id}', function(string $nome = "Desconhecido", int $categoria_id = 0) 
// {
//     echo "teste contato: $nome - $categoria_id";
// }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); //teste
    
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function() {return "login";})->name('site.login');

Route::prefix('/app')->group(function() 
{
    Route::get('/clientes', function() {return "clientes";})->name('app.clientes');
    Route::get('/fornecedores', function() {return "fornecedores";})->name('app.fornecedores');
    Route::get('/produtos', function() {return "produtos";})->name('app.produtos');
});