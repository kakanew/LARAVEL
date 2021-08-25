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
                'cnpj' => ''
                ],  
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S'
                ]
        ];
        /*
        condicao ? se verdade : se falso;
        condicao ? se verdade : se condicao ? se verdade : se falso;
        */
        //echo isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
