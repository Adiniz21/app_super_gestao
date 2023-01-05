<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 0',
                'status' => 'n',
                'cnpj' => '00.000.000/00-00',
                'ddd' => '11', //sao paulo
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'fornecedor 1',
                'status' => 'n',
                'cnpj' => '0',
                'dd' => '85', //ceara
                'telefone' => '00000-0000'
            ],
            2 => [
                'nome' => 'fornecedor 2',
                'status' => 'n',
                'cnpj' => '0',
                'dd' => '32', //Minas Gerais
                'telefone' => '00000-0000'
            ],
        ];

        echo isset($fornecedores[1]['cnpj']) ? 'Cnpj informado' : 'Cnpj não informado';
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
