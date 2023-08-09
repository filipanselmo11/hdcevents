<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = "Fílip";
        $idade = 26;
        $profissao = "Desenvolvedor";
        $arr = [1, 2, 3, 4, 5];
        $nomes = ["Filip", "Maria", "João"];

        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao, 'arr' => $arr, 'nomes' => $nomes]);
    }

    public function create()
    {
        return view('events.create');
    }
}
