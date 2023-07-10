<h3>Suppliers</h3>


{{-- Comentario --}}

{{-- @dd($suppliers) --}}


@php
    // if(isset($variavel)) {} //retorna se a variável está definida
@endphp


<!-- Testa a existência da variável, caso exista, ela entra no método, caso não, apenas deixa de lado -->
@isset($suppliers)
    Fornecedor: {{ $suppliers[1]['nome'] }}
    <br>
    Status: {{ $suppliers[1]['status'] }}
    <br>
    @isset($suppliers[1]['cnpj']) <!-- caso exista ele funciona, caso não, não funciona -->
        CNPJ: {{ $suppliers[0]['cnpj'] }}
    @endisset
@endisset




