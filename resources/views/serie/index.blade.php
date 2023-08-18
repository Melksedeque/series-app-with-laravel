<x-layout title="Séries">
    <div class="page-header d-flex justify-content-between align-items-center mb-3">
        <h1>Séries</h1>
        <a href="{{ route('serie.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    </div>

    <ul class="list-group">
        @foreach ($series as $serie)
        {{-- {{dd($serie)}} --}}
        <li class="list-group-item">
            {{ $serie->title }}
            <div class="d-flex justify-content-around gap-2 options">
                <a class="btn btn-success" href="{{ route('serie.show', $serie->id) }}"><i class="bi bi-eye"></i></a>
                <a class="btn btn-primary" href="{{ route('serie.edit', $serie->id) }}"><i class="bi bi-pencil-square"></i></a>
                <form action="{{ route('serie.destroy', ['serie' => $serie->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</x-layout>
