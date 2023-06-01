@extends('layouts.app')
@section('title', 'Table Comics')
@section('content')
    <a name="" id="" class="btn btn-primary" href="{{ route('admin.comics.create') }}" role="button">Add New
        Comic</a>
    @if (session('message'))
        <div class="alert alert-info" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
               
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
                        <td>
                            <a href="{{ route('admin.comics.show', $comic->id) }}">VIEW</a>
                            <a href="{{ route('admin.comics.edit', $comic->id) }}">EDIT</a>
                            {{-- <a href="{{route('admin.comics.edit', $comic->id)}}">EDIT</a> --}}
                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger " data-bs-toggle="modal"
                                data-bs-target="#modal-{{ $comic->id }}">
                                Delete
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $comic->id }}"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Delete
                                                {{ $comic->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicur*?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger ">Si</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Optional: Place to the bottom of scripts -->
                            <script>
                                const myModal = new bootstrap.Modal(document.getElementById('{{$comic->id}}'), options)
                            </script>
                        </td>
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
