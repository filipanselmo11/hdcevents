@extends('layouts.main')

@section('page-title', 'Editando ' . $event->title)

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>
        Editando: {{ $event->title }}
    </h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{ $event->image }}" alt="" class="image-preview"/>
        </div>
        <div class="form-group">
            <label for="title"> Evento:</label>
            <input type="text" id="title" name="title" placeholder="Nome do Evento" class="form-control" value="{{ $event->title }}">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $event->date }}">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" id="city" name="city" placeholder="Local do Evento" class="form-control" value="{{ $event->city }}">
        </div>
        <div class="form-group">
            <label for="title">Privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" placeholder="O que vai acontecer no evento ?" class="form-control">
                {{ $event->description }}
            </textarea>
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
        <br />
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>
@endsection
