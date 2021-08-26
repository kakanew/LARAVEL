<h3>Fornecedor</h3>

@php
    /*
    $variavel testada não estiver definida (isset)
    ou
    $variavel testada possuir o valor null
    */
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status:  {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não preenchido'}}
@endisset