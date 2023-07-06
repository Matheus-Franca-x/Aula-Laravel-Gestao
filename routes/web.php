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
    
Route::get('/', [\App\Http\Controllers\MainController::class, 'main'])->name('site.index');
Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'aboutUs'])->name('site.aboutus');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contact'])->name('site.contact');
Route::get('/login', function() {return "login";})->name('site.login');

Route::prefix('/app')->group(function() 
{
    Route::get('/clients', function() {return "clients";})->name('app.clients');
    Route::get('/suppliers', [\App\Http\Controllers\SuppliersController::class, 'index'])->name('app.suppliers');
    Route::get('/products', function() {return "products";})->name('app.products');
});

Route::get('/test/{p1}/{p2}', [\App\Http\Controllers\TestController::class, 'test'])->name('test');

Route::fallback(function() 
{
    echo "A rota acessada não existe. <a href=".route('site.index').">Clique aqui</a> para voltar a página inicial.";
});