<?php

use App\Http\Controllers\FraisController;
use App\Http\Controllers\VisiteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/visiteur/initpwds', [VisiteurController::class, "initPasswords"]);
Route::post('/visiteur/login', [VisiteurController::class , "login"]);
Route::get('/visiteur/logout', [VisiteurController::class, "logout"])->middleware('auth:sanctum');
Route::get('/visiteur/unauth', [VisiteurController::class, "unauthorized"])->name('login');
Route::get('/frais/{id}', [FraisController::class, "frais"])->middleware('auth:sanctum');
