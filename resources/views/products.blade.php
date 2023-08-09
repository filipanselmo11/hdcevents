@extends('layouts.main')

@section('page-title', 'Bem Vindo ao HDC Events')
@section('title', 'Produtos')

@section('content')
<div class="container text-center">
    <h1>Produtos</h1>
    @if($busca != '')
    <p>
        O usuário esta buscando por: {{ $busca }}
    </p>
    @endif
</div>
@endsection
