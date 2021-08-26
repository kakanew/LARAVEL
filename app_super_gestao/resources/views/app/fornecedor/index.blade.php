<h3>Fornecedor</h3>

@php


@endphp

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        {{-- 
        @dd ($loop)
         --}}
        Interação atual: {{ $loop->iteration }}
        <br>
        Fornecedor: @{{ $fornecedor['nome'] }}
        <br>
        Status: @{{ $fornecedor['status'] }}
        <br>
        CNPJ: @{{ $fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: (@{{ $fornecedor['ddd'] ?? ''}}) @{{$fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira Iteração do loop
        @endif
        @if($loop->last)
            Última Iteração do loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
