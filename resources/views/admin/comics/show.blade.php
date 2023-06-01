@extends('layouts.app')
@section('title', $comic->title)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="card d-flex justify-content-center align-items-center">
                    <img class=" img-fluid" width="200" src="{{ $comic->thumb }}" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $comic->title }}</h4>
                      <strong> <p class="card-text">{{$comic->price}}</p></strong> 
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">{{$comic->type}}</p>
                        <p class="card-text">{{$comic->description}}</p>
                        <p class="card-text">{{$comic->sale_date}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
