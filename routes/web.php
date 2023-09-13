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

//login inicia
Route::get('/', function () {
    return view('login');
});

//diretor_UEI
Route::get('/painel/UEI', function () {
    return view('diretor_UEI.index');
});

Route::get('/painel/UEI/lista', function () {
    return view('diretor_UEI.diretor.lista');
});



//Aluno
Route::get('/painel/Aluno', function () {
    return view('aluno.index');
});

//Orientador
Route::get('/painel/Orientador', function () {
    return view('orientador.index');
});

//Coordenador Curso
Route::get('/painel/CoordenadorCurso', function () {
    return view('coordenador_urso.index');
});

