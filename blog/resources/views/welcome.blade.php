@extends('layouts.main')

@section('title','sobre')

@section('content')

<h1>VENHA!</h1>

@foreach ($products as $product)
    <p>{{ $product->nome_produto }} -- {{ $product->descricao_produto }} -- {{ $product->valor_produto }}</p>
@endforeach

@endsection