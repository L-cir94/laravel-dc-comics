@extends('layouts.app')
@section('title', 'Table Comics')
@section('content')
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
                <tr class="table-primary" >
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td><img class="img-fluid" src="{{$comic->thumb}}" alt=""></td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->series}}</td>
                    <td>VIEW / EDITE / DELETE</td>
                </tr>
                @empty
                <tr class="table-primary" >
                    <td scope="row">Campo vacio</td>
                </tr>   
                @endforelse
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
</div>

@endsection
