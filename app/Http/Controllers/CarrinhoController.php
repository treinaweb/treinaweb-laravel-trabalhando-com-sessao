<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function listar(Request $request)
    {
        // $produto = $request->session()->get('produto', 'Produto não encontrado');
        $produto = session('produto', 'produto não encontrado');

        var_dump($produto);
    }

    public function adicionar()
    {
        // $request->session()->put('produto', 'Boneca');
        session(['produto' => 'bola']);

        return 'adicionado com sucesso';
    }
}
