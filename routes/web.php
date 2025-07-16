<?php

use App\Livewire\AdminComponent;
use App\Livewire\Clientes\ClientesComponent;
use App\Livewire\Convenios\ConveniosComponent;
use App\Livewire\Estados\EstadosComponent;
use App\Livewire\Pedidos\PedidosComponent;
use App\Livewire\Politicas\PoliticasComponent;
use App\Livewire\Precios\PreciosComponent;
use App\Livewire\Enviar\EnviarComponent;
use App\Livewire\Tiposdocumentos\TiposdocumentosComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/estados', EstadosComponent::class)->name('estados');
Route::get('/convenios', ConveniosComponent::class)->name('convenios');
Route::get('/pedidos', PedidosComponent::class)->name('pedidos');
Route::get('/clientes', ClientesComponent::class)->name('clientes');
Route::get('/precios', PreciosComponent::class)->name('precios');
Route::get('/tiposdocumentos', TiposdocumentosComponent::class)->name('tiposdocumentos');
Route::get('/politicas', PoliticasComponent::class)->name('politicas');
Route::get('/enviar', EnviarComponent::class)->name('enviar');
Route::get('/admin', AdminComponent::class)->name('admin');

Route::get('/servicios', function () { return view('servicios'); })->name('servicios');
Route::get('/nosotros', function () { return view('nosotros'); })->name('nosotros');
Route::get('/galeria', function () { return view('galeria'); })->name('galeria');
// Route::get('/enviar', function () { return view('enviar'); })->name('enviar');
Route::get('/contacto', function () { return view('contacto'); })->name('contacto');

Route::get('/descargar-archivo/{nombreArchivo}', [PedidosComponent::class, 'descargar']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
