@extends('layouts.main')

@section('content')
    <h1 class="text-center">{{ $comic['title'] }}</h1>
    <div class="container d-flex">
        <div class="comic_thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
        <div class="comic_info border">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $comic['series'] }}</li>
                <li class="list-group-item">{{ $comic['sale_date'] }}</li>
                <li class="list-group-item">{{ $comic['type'] }}</li>
                <li class="list-group-item">{{ $comic['description'] }}</li>
                <li class="list-group-item fs-2 ">{{ $comic['price'] }}</li>
                <a href="{{ route('comics.edit', $comic->id) }}" class="card-link btn btn-warning d-inline-block"><i
                        class="fa-solid fa-pencil"></i></a>
                @include('partials.delete')
            </ul>
        </div>
    </div>
@endsection
