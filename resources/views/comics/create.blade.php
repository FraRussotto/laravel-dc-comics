@extends('layouts.main')

@section('content')
    <h3 class="text-center mb-5">Inserimento nuovo prodotto</h3>
    <div class="container-fr">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descrizione prodotto" id="description" name="description"
                    style="height: 200px"></textarea>
                <label for="floatingTextarea2">Descrizione del prodotto</label>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Disponibile dal:</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="type" name="type" aria-describedby="title">
            </div>
            <div class="text-center">

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-warning">Annulla</button>

            </div>
        </form>
    </div>
@endsection
