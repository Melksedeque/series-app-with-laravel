<x-layout title="Series">
    <div class="container">
        <a href="{{ route('series.create') }}">+ Adicionar</a>
        <section class="series">
            <ul>
                @forelse ($series as $serie)
                    <li>
                        {{ $serie->title }}
                        <a href="{{ route('series.update') }}">E</a>
                        <a href="{{ route('series.destroy') }}">X</a>
                    </li>
                @empty
                    <p>Não foi possível encontrar nenhuma série</p>
                @endforelse
            </ul>
        </section>
    </div>
</x-layout>
