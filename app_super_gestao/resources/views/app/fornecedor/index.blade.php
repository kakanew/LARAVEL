<h3>Fornecedor</h3>

{{ 'Texto de teste 1' }}
<br />
<?= 'Texto de teste 2' ?>
<br />
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
    // Para comentários de uma linha
    /*
        Para comentários de multiplas linhas
    */

    echo 'Texto de teste 3';
@endphp
