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

Route::get('/', function () {
    $nome = "Fílip";
    $idade = 26;
    $profissao = "Desenvolvedor";
    $arr = [1,2,3,4,5];
    $nomes = ["Filip", "Maria", "João"];

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao, 'arr' => $arr, 'nomes' => $nomes]);
});

Route::get('/products', function() {
    return view('products');
});
