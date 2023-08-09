@extends('layouts.main')

@section('page-title', 'Bem Vindo ao HDC Events')
@section('title', 'Produto')

@section('content')
<div class="container text-center">
    @if($id !== null)
    <h1>
        Exibindo Produto id: {{ $id }}
    </h1>
    @endif
</div>
@endsection
