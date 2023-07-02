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
    
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
    

