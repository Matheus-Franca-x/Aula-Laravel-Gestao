<h3>Suppliers</h3>


{{-- Comentario --}}

{{-- @dd($suppliers) --}}


@php
    // if(isset($variavel)) {} //retorna se a variável está definida
    // if(empty($variavel)) {} //retorna true se a variável vazia
@endphp


<!-- Testa a existência da variável, caso exista, ela entra no método, caso não, apenas deixa de lado -->
@isset($suppliers)
    @foreach($suppliers as $indice => $supplier)
        Fornecedor: {{ $supplier['nome'] }}
        <br>
        Status: {{ $supplier['status'] }}
        <br>
        CNPJ: {{ $supplier['cnpj'] ?? 'Dado não preenchido!' }} <!-- '' é um valor default -->
        <br>
        Telefone: ({{ $supplier['ddd'] ?? '' }}) {{ $supplier['telefone'] }}
        <hr>
    @endforeach
@endisset
