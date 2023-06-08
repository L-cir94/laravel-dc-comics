@extends('layouts.app')
@section('title','Comics')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic )
        <div class="col-4  g-2">
            
                
                <div class="card h-100">
                    <div class="card-header text-center">
                        <strong>
                            {{$comic->title}}
                        </strong>
                        <a href="{{ route('admin.comics.show', $comic->id) }}"><i class="fa-solid fa-eye"></i></a>   
                    </div>
                    <div class="card-body">
                      <img width="398.39" height="612.53" class="" src="{{$comic->thumb}}" alt=" {{$comic->title}}">
                          
                      <p>{{$comic->description}}</p>
                      <p><strong>{{$comic->price}}</strong></p>
                      <p>{{$comic->series}}</p>
                    </div>
                    <div class="card footer text-center">
                        <h4>{{$comic->type}}</h4>
                        <p>Data di Stampa: {{$comic->sale_date}}</p>
                    </div>
                </div>
                
            
        </div>
        @endforeach
    </div>
</div>
@endsection

</html>