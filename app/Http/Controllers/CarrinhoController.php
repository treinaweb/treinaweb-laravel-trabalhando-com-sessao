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

    public function adicionar(Request $request)
    {
        // $request->session()->put('produto', 'Boneca');
        // session(['produto' => 'bola']);
        // session(['total' => 'R$ 123,00']);

        if ($request->session()->missing('produtos')) {
            $request->session()->put('produtos', []);
        }

        $request->session()->push('produtos', $request->produto);

        $request->session()->flash('mensagem', 'adicionada ao carrinho com sucesso');

        return 'adicionado com sucesso';
    }

    public function remover(Request $request)
    {
        // $request->session()->forget(['produto', 'total']);
        //$request->session()->flush();

        if ($request->session()->has('produtos')) {
            session()->forget(['produtos']);

            return 'O carrinho foi limpo com sucesso';
        }

        return 'Não removeu nenhum item porque não tinha nenhum produto';
    }
}
