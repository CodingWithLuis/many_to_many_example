@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Nuevo Libro</a>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Libro</th>
                                <th>Autores</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{$book->name}}</td>
                                <td>
                                    @foreach ($book->authors as $author)
                                    {{$author->name}} <br>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
