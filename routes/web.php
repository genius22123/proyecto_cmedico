<?php


use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ClientesIndex;


use App\Http\Livewire\Admin\Tipodocumentos\DocumentosIndex;
use App\Http\Livewire\Admin\Tipotramite\TramitesIndex;




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


/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('clientes',ClientesIndex::class)->name('clientes.index');
/* Route::get('administrar',Index::class)->name('administrar'); */
Route::get('administrar/tipo-documentos',DocumentosIndex::class)->name('administrar.documentos');
Route::get('administrar/tipo-tramite',TramitesIndex::class)->name('administrar.tramites');





