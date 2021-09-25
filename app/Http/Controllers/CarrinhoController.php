<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function listar(Request $request)
    {
        // $produto = $request->session()->get('produto', 'Produto não encontrado');
        // $produto = session('produto', 'produto não encontrado');
        // $total = session('total', 'Nenhum item adicionado');


        var_dump(session()->all());
    }

    public function adicionar()
    {
        // $request->session()->put('produto', 'Boneca');
        session(['produto' => 'bola']);
        session(['total' => 'R$ 123,00']);

        return 'adicionado com sucesso';
    }

    public function remover(Request $request)
    {
        // $request->session()->forget(['produto', 'total']);
        //$request->session()->flush();

        if ($request->session()->has('produto')) {
            session()->forget(['produto', 'total']);

            return 'foi removido com sucesso';
        }

        return 'Não removeu porque não tinha nenhum produto';
    }
}
