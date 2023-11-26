@extends('layouts.main')

@section('content')
    <h3 class="text-center mb-5">Modifica del prodotto: {{ $comic['title'] }}</h3>
    <div class="container-fr">
        <form action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title"
                    value="{{ $comic['title'] }}">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descrizione prodotto" id="description" name="description"
                    style="height: 200px">{{ $comic['description'] }}</textarea>
                <label for="floatingTextarea2">Descrizione</label>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" aria-describedby="title"
                    value="{{ $comic['thumb'] }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" aria-describedby="title"
                    value="{{ $comic['price'] }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" aria-describedby="title"
                    value="{{ $comic['series'] }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Disponibile dal:</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" aria-describedby="title"
                    value="{{ $comic['sale_date'] }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="type" name="type" aria-describedby="title"
                    value="{{ $comic['type'] }}">
            </div>
            <div class="text-center">

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-warning">Annulla</button>

            </div>
        </form>
    </div>
@endsection
