<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        //$fornecedores = ['fornecedor 1']; //Existem alguns fornecedores cadastrados
        //$fornecedores = []; //Ainda não existe fornecedores cadastrados
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '0',
                'ddd' => '11', // São Paulo (SP)
                'telefone' => '0000-0000'
            ],  
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S',
                'ddd' => '31', //BH (MG)
                'telefone' => '0000-0000'
            ],
            2=> [
                'nome' => 'Fornecedor 3', 
                'status' => 'S',
                'ddd' => '21', //Rio de Janeiro (RJ)
                'telefone' => '0000-0000'
                ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
