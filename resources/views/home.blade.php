@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row row-cols-3">

            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="img-body">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top image-size" alt="{{ $comic['title'] }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>
                            <p class="card-text description-h">{{ $comic['description'] }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $comic['series'] }}</li>
                            <li class="list-group-item">{{ $comic['sale_date'] }}</li>
                            <li class="list-group-item">{{ $comic['type'] }}</li>
                            <li class="list-group-item">{{ $comic['price'] }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
