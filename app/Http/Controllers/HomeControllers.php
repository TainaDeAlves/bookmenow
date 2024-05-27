<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function home(){
        return view('home');
    }

    public function empresa(){
        $nomesobrenome= "Taina de Souza";
        return view('empresa',[
            'nomesobrenome'=> $nomesobrenome
        ]);
    }

    public function servicos(){
        $listadeservicos =[
            "Emprestimo de livro",
            "Devolução de livro",
            "Lista de Novos lançamentos",
            "Emprestimos de Eboock",
            "Parceria de Colaboração"
        ];
        return view('servico',[
            'listaservicos'=> $listadeservicos
        ]);
    }
}
