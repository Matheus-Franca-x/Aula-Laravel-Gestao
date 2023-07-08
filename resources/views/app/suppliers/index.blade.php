<h3>Suppliers</h3>


{{-- Comentario --}}

{{-- @dd($suppliers) --}}


@if(count($suppliers) > 0 && count($suppliers) <= 10)
    <h3>Há alguns fornecedores!</h3>
@elseif(count($suppliers) > 10)
    <h3>Há um monte de fornecedores!</h3>
@else
    <h3>Não há nenhum fornecedor!</h3>
@endif

Fornecedor: <?= $suppliers[0]['nome']?>
<br>
Status: <?= $suppliers[0]['status']?>
<br>

@if(!($suppliers[0]['status'] == 'S'))
    Fornecedor Inativo.
@endif
<br>

@unless($suppliers[0]['status'] == 'S')
    Fornecedor Inativo.
@endunless

