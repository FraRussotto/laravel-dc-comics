<form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline-block"
    onsubmit="return confirm('Sicuro di volerlo eliminare?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</form>
