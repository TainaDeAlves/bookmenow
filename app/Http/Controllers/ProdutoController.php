<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produtos(){
        $nomeproduto= "X-tudo";
        return view('/produto',[
            'nomedoprotudo'=> $nomeproduto
        ]);
    }

    public function livros(){
        $listadelivros=[
            'O corpo fala',
            'como ler mentes',
            'Css3',
            'HTML'
        ];
        return view('livros', [
            'listalivros'=>$listadelivros 
        ]);
    }
}
