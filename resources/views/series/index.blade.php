<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        {{-- {{dd($serie)}} --}}
        <li class="list-group-item">{{ $serie->title }} <a class="btn btn-primary" href="{{ route('series.edit', $serie->id) }}">Editar</a></li>
        @endforeach
    </ul>
</x-layout>
