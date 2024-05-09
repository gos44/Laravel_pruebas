<?php
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\CousinsController;
use App\Http\Controllers\InvertedPhraseController;
use App\Http\Controllers\CuadraticaController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\TallerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

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

Route::get('/Primos', function () {
    return view('welcome');
}); 

Route::get('/listarproduc',[ProductsController::class,'listarproduc'])->name('listarproduc');
Route::delete('/{producto}',[ProductsController::class,'destroy'])->name('destroy');
Route::post('/productostore',[ProductsController::class,'productoStore'])->name('product.store');
Route::get('/{producto}',[ProductsController::class,'show'])->name('showproducts');
Route::delete('/{producto}',[ProductsController::class,'destroy'])->name('destroy');

Route::get('/frmercado',[MarketController::class,'mercardo']);
Route::post('/Mercado',[MarketController::class,'mercado2'])->name('product2.store');

Route::get('/frlibreria',[LibraryController::class,'library']);
Route::post('/libreria',[LibraryController::class,'library2'])->name('product3.store');



Route::get('/frcuadratica',[CuadraticaController::class,'cuadratica']);
Route::post('/cuadratica',[CuadraticaController::class,'cuadratica2'])->name('product4.store');


Route::get('/frcousins',[CousinsController::class,'Cousins']);
Route::post('/cousins',[CousinsController::class,'Cousins2'])->name('product5.store');


Route::get('/frinverted',[InvertedPhraseController::class,'inverted']);
Route::post('/inverted',[InvertedPhraseController::class,'inverted2'])->name('frinverted.os');

Route::get('/framigos',[FriendsController::class,'amigos']);
Route::post('/verificarAmigos',[FriendsController::class,'verificarAmigos'])->name('amigos.co');

Route::get('/index',[CursoController::class,'index']);
Route::get('/frcurso',[CursoController::class,'curso']);    
Route::post('/curso',[CursoController::class,'funcioncurso'])->name('cursos.store');


Route::controller(ProductsController::class)->group(function(){

    Route::get('/cosas','cosas');
    Route::get('/cosas2','cosas');
    Route::get('/Primos/{dato1}','Primos');
    Route::get('/Amigos/{numero1}/{numero2}', 'Amigos');
    
    });





