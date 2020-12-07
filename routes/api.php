<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClassificationController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\MovieController;

// Classificação
Route::apiResource('classificacoes', ClassificationController::class);

// Funcionário
Route::apiResource('funcionarios', EmployeeController::class);

// Filmes
Route::get('filmes/{id}/detalhes', [MovieController::class, 'informaTudo']);
Route::apiResource('filmes', MovieController::class);

// Atores
Route::get('atores/{id}/funcionario', [ActorController::class, 'employee']);
Route::apiResource('atores', ActorController::class);