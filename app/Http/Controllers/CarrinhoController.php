<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function listar(Request $request)
    {
        $produto = $request->session()->get('produto', 'Produto não encontrado');

        var_dump($produto);
    }

    public function adicionar(Request $request)
    {
        $request->session()->put('produto', 'Boneca');

        return 'adicionado com sucesso';
    }
}
