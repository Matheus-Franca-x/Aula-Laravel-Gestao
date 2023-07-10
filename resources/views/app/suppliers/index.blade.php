<h3>Suppliers</h3>


{{-- Comentario --}}

{{-- @dd($suppliers) --}}


@php
    // if(isset($variavel)) {} //retorna se a variável está definida
    // if(empty($variavel)) {} //retorna true se a variável vazia
@endphp


<!-- Testa a existência da variável, caso exista, ela entra no método, caso não, apenas deixa de lado -->
@isset($suppliers)
    Fornecedor: {{ $suppliers[0]['nome'] }}
    <br>
    Status: {{ $suppliers[0]['status'] }}
    <br>
    @isset($suppliers[0]['cnpj']) <!-- caso exista ele funciona, caso não, não funciona -->
        CNPJ: {{ $suppliers[0]['cnpj'] }}
        @empty($suppliers[0]['cnpj']) <!-- teste para ver se está vazio -->
            - vazio
        @endempty
    @endisset
@endisset




