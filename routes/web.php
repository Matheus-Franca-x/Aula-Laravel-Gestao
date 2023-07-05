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
    Route::get('/suppliers', function() {return "suppliers";})->name('app.suppliers');
    Route::get('/products', function() {return "products";})->name('app.products');
});

Route::get('/route1', function()
{
    echo 'rota 1';
})->name('site.route1');

Route::get('/route2', function()
{
    echo 'rota 2';
})->name('site.route2');