@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row row-cols-4">

            @foreach ($comics as $comic)
                <div class="col my-1">
                    <div class="card" style="width: 18rem;">
                        <div class="img-body">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top image-size" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title title-h">{{ $comic['title'] }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $comic['price'] }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('comics.show', $comic->id) }}" class="card-link btn btn-success"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a href="{{ route('comics.edit', $comic->id) }}"
                                class="card-link btn btn-warning d-inline-block"><i class="fa-solid fa-pencil"></i></a>
                            @include('partials.delete')
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
