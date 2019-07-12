@extends('painel.tampletes.tamplete')

@section('conteudo')

<h1 class="title-pg">
<a href="{{ route('produtos.index') }}"><i class="icon ion-md-rewind"></i></a>
  Produto: <b>{{ $produtos->et_nome }}</b></h1>



  <div class="row">
    <div class="col col-lg-2">Código:</div>
    <div class="col col-lg-2">{{ $produtos->et_codigo }}</div>
    <div class="w-100"></div>
    <div class="col col-lg-2">Produto:</div>
    <div class="col col-lg-2">{{ $produtos->et_nome }}</div>
    <div class="w-100"></div>
    <div class="col col-lg-2">Preco:</div>
    <div class="col col-lg-2">{{ $produtos->et_preco }}</div>
    <div class="w-100"></div>
    <div class="col col-lg-2">Descricao:</div>
    <div class="col col-lg-2">{{ $produtos->et_descricao }}</div>    

  </div>

  <hr>

  @if(isset($errors) && count($errors) > 0 )

<div class="alert alert-danger">
  @foreach($errors->all() as $msg)
  <p>{{ $msg }}</p>
  @endforeach
</div>
  @endif

  {!! Form::open(['route' => ['produtos.destroy', $produtos->id], 'method' => 'DELETE']) !!}
  	{!! Form::submit("Deletar Produto: $produtos->et_nome", ['class' => 'btn btn-danger']) !!}
  {!! Form::close() !!}



@endsection