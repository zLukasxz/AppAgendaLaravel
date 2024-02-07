<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/',[ContatoController::class,'index'])->name('index');
Route::get('/cadastrar',[ContatoController::class,'showFormContato'])->name('formulario-contato');
Route::post('/cadastrar',[ContatoController::class,'storeContato'])->name('cadastrar-contato');
Route::get('/todosContato',[ContatoController::class,'showGerenciador'])->name('todos-contato');
Route::delete('/todosContato/{id}',[ContatoController::class,'destroy'])->name('delete-contato');

//Partes do Alterar
Route::get('/alterar/{id}',[ContatoController::class,'show'])->name('alterar-contato');
Route::put('/alterarBanco/{id}',[ContatoController::class,'update'])->name('alterarBanco-contato');

//Get -> Mostrar
//Post -> Enviar Dados
//Delete -> Deletar Dados