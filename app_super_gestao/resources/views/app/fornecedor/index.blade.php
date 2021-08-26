<h3>Fornecedor</h3>

@php
    /*
    $variavel testada não estiver definida (isset)
    ou
    $variavel testada possuir o valor null
    */
@endphp

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status:  {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[1]['telefone'] ?? ''}}
        <hr>
    @endfor
@endisset


{{-- 
@for ($i = 0; $i < 10; $i++)beu
    {{$i}}<br>
@endfor 
 --}}
