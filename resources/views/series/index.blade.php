<x-layout title="Séries">
        <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    </div>

    <ul class="list-group">
        @foreach ($series as $serie)
        {{-- {{dd($serie)}} --}}
        <li class="list-group-item">
            {{ $serie->title }}
            <div class="options">
                <a class="btn btn-success" href="{{ route('series.show', $serie->id) }}"><i class="bi bi-eye"></i></a>
                <a class="btn btn-primary" href="{{ route('series.edit', $serie->id) }}"><i class="bi bi-pencil-square"></i></a>
                <a class="btn btn-danger" href="{{ route('series.destroy', $serie->id) }}"><i class="bi bi-trash"></i></a>
            </div>
        </li>
        @endforeach
    </ul>
</x-layout>
