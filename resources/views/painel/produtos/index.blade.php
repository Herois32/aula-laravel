@extends('painel.tampletes.tamplete')

@section('conteudo')
<h1 class="title-pg">Listagem dos Produtos</h1>

<a href="{{ route('produtos.create') }}" class="btn btn-primary btn-add"><i class="icon ion-md-add"></i>  Cadastrar </a>

<table class="table table-striped">
	<tr>
		<th>Código</th>
		<th>Nome</th>
		<th>Descrição</th>
		<th>Valor R$</th>
		<th width="100px">Ações</th>

	</tr>
	@foreach($produtos as $product)
	<tr>
		<td>{{ $product->et_codigo }}</td>
		<td>{{ $product->et_nome }}</td>
		<td>{{ $product->et_preco }}</td>
		<td>{{ $product->et_descricao }}</td>
		<td>
			<a href="{{route('produtos.edit', $product->id)}}" class="action edit"><i class="icon ion-md-create"></i></a>
			<a href="{{ route('produtos.show', $product->id) }}" class="action delete"><i class="icon ion-md-eye"></i></a>
		</td>
	</tr>
	@endforeach
</table>

{!! $produtos->links() !!}

@endsection