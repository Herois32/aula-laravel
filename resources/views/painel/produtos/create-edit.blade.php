@extends('painel.tampletes.tamplete')


@section('conteudo')

<h1 class="title-pg">
<a href="{{ route('produtos.index') }}"><i class="icon ion-md-rewind"></i></a>
  Gestão do Produto: <b>{{ $produtos->et_nome or "Cadastrar Novo" }}</b></h1>

@if(isset($errors) && count($errors) > 0 )

<div class="alert alert-danger">
  @foreach($errors->all() as $msg)
  <p>{{ $msg }}</p>
  @endforeach
</div>
  @endif


@if(isset($produtos))
  {!! Form::model($produtos, ['route' => ['produtos.update', $produtos->id], 'calss' => 'form', 'method' => 'put' ] ) !!}
@else
  {!! Form::open(['route' => 'produtos.store', 'class' => 'form']) !!}
@endif  
  <div class="form-group">
    <label for="Codigo">Código do Produto</label>
    {!! Form::text('et_codigo', null, ['class' => 'form-control', 'placeholder' => 'Digite o Código']) !!}
  </div>
  <div class="form-group">
    <label for="nome">Produto</label>
     {!! Form::text('et_nome', null, ['class' => 'form-control', 'placeholder' => 'Digite o Produto']) !!}
  </div>
  <div class="form-group">
    <label for="preco">Valor R$</label>
    {!! Form::text('et_preco', null, ['class' => 'form-control', 'placeholder' => 'Digite o Valor']) !!}
  </div>
    <div class="form-group">
    <label for="descricao">Descrição</label>
    {!! Form::textarea('et_descricao', null, ['class' => 'form-control', 'placeholder' => 'Digite a descrição']) !!}
  </div>    
  {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@endsection