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
            <label for="date">Data do Evento:</label>
            <input type="date" id="date" name="date" class="form-control">
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
        <div class="form-group">
            <label for="title">
                Adicione itens de forma estrutura
            </label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open food"> Open food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <br/>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection
