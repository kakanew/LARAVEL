<h3>Fornecedor</h3>

@php
    /*
    $variavel testada não estiver definida (isset)
    ou
    $variavel testada possuir o valor null
    */
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[2]['nome'] }}
    <br>
    Status:  {{ $fornecedores[2]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[2]['cnpj'] ?? ''}}
    <br>
    Telefone: ({{ $fornecedores[2]['ddd'] ?? ''}}) {{ $fornecedores[1]['telefone'] ?? ''}}
    <br>
    @switch ($fornecedores[2]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('31')
            BH - MG
            @break
        @case ('21')
            Rio de Janeiro - RJ
            @break
        @default
        Estado não identificado
    @endswitch
@endisset