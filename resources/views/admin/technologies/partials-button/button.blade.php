<a href="{{ route('admin.technologies.edit', $technology) }}" class="m-2">
    <button class="btn btn-success d-inline-block">Modifica</button>
</a>

<button type="button" class="btn btn-danger m-2 inline-block" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $technology->id }}">
    Elimina
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $technology->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Elimina</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Sei sicuro di voler eliminare il progetto: {{ $technology->title }}?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>

        <form class="d-inline-block" action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">
                Elimina
            </button>
        </form>
        </div>
    </div>
    </div>
</div>

