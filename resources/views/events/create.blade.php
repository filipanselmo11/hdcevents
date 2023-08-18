@extends('layouts.main')

@section('page-title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>
        Crie seu evento
    </h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title"> Evento:</label>
            <input type="text" id="title" name="title" placeholder="Nome do Evento" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" id="city" name="city" placeholder="Local do Evento" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" placeholder="O que vai acontecer no evento ?" class="form-control"></textarea>
        </div>
        <br/>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection
