<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        //$fornecedores = ['fornecedor 1']; //Existem alguns fornecedores cadastrados
        //$fornecedores = []; //Ainda não existe fornecedores cadastrados
        $fornecedores = [
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
            'Fornecedor 1',
        ]; // Existem vários fornecedores cadastrados
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
