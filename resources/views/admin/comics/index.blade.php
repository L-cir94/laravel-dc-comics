@extends('layouts.app')
@section('title', 'Table Comics')
@section('content')
<a name="" id="" class="btn btn-primary" href="{{route('admin.comics.create')}}" role="button">Add New Comic</a>
@if (session('message'))
<div class="alert alert-info" role="alert">
    <strong>{{session('message')}}</strong>
</div>
@endif
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
                <caption>Comics</caption>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Thumb</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Sale date</th>
                    <th>Series</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse ($comics as $comic)
                    <tr class="table-primary">
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td><img class="img-fluid" src="{{ $comic->thumb }}" alt=""></td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->series }}</td>
                        <td><a href="{{route('admin.comics.show', $comic->id)}}">view</a> / EDITE / DELETE</td>
                    </tr>
                @empty
                    <tr class="table-primary">
                        <td scope="row">Campo vacio</td>
                    </tr>
                @endforelse
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>

@endsection
