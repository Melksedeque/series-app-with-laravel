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
            <div class="options">
                <a class="btn btn-success" href="{{ route('serie.show', $serie->id) }}"><i class="bi bi-eye"></i></a>
                <a class="btn btn-primary" href="{{ route('serie.edit', $serie->id) }}"><i class="bi bi-pencil-square"></i></a>
                <a class="btn btn-danger" href="{{ route('serie.destroy', $serie->id) }}"><i class="bi bi-trash"></i></a>
            </div>
        </li>
        @endforeach
    </ul>
</x-layout>
