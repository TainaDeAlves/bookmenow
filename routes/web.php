<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeControllers;

use App\Http\Controllers\ProdutoController;

Route::get('/',[HomeControllers::class, 'home']);


Route::get('/empresa',[HomeControllers::class, 'empresa']);

Route::get('/servicos', [HomeControllers::class, 'servicos']);

Route::get('/produto',[ProdutoController::class, 'produtos']);

Route::get('/livros',[ProdutoController::class, 'livros']);