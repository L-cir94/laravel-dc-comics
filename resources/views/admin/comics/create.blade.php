@extends('layouts.app')
@section('title', 'Table Comics')
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
            <form action="{{ route('admin.comics.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                        placeholder="comic's title" class="@error('title') is-invalid @enderror">
                    <small id="helpId" class="form-text text-muted">Inserisci il titolo del fumetto</small>
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                        placeholder="comic's serie">
                    <small id="helpId" class="form-text text-muted">Inserisci la serie del fumetto</small>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId"
                        placeholder="" step="0.01">
                    <small id="helpId" class="form-text text-muted">inserisci il prezzo</small>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                        placeholder="">
                    <small id="helpId" class="form-text text-muted">Insert Url</small>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                        placeholder="Insert type">
                    <small id="helpId" class="form-text text-muted">Inserisci la tipologia di fumetto</small>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di rilascio</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId"
                        placeholder="">
                    <small id="helpId" class="form-text text-muted">Inserisci la data di rilascio del fumetto</small>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    <small id="helpId" class="form-text text-muted">Inserisci la descrizione del fumetto</small>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
@endsection
