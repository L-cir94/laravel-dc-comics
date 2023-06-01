@extends('layouts.app')
@section('title', 'Edit comic')
@section('content')
<div class="container">
     @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row me-5">
        <form action="{{route('admin.comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text"
                class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="comic's title" value="{{$comic->title}}" required>
              <small id="helpId" class="form-text text-muted">Inserisci il titolo del fumetto</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text"
                  class="form-control" name="series" id="series" aria-describedby="helpId" placeholder="comic's serie" value="{{$comic->series}}">
                <small id="helpId" class="form-text text-muted">Inserisci la serie del fumetto</small>
              </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="" step="0.01" value="{{$comic->price}}">
                <small id="helpId" class="form-text text-muted">inserisci il prezzo</small>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId" placeholder="" value="{{$comic->thumb}}">
                <small id="helpId" class="form-text text-muted">Insert Url</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Insert type" value="{{$comic->type}}">
                <small id="helpId" class="form-text text-muted">Inserisci la tipologia di fumetto</small>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di rilascio</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId" placeholder="" value="{{$comic->sale_date}}">
                <small id="helpId" class="form-text text-muted">Inserisci la data di rilascio del fumetto</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{$comic->description}}"</textarea>
                <small id="helpId" class="form-text text-muted">Inserisci la descrizione del fumetto</small>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
@endsection
