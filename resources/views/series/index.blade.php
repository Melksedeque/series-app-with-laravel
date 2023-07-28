<x-layout title="Series">
    <div class="container">
        <a href="/series/create">+ Adicionar</a>
        <section class="series">
            <ul>
                @forelse ($series as $serie)
                    <li>{{ $serie->title }}</li>
                @empty
                    <p>Não foi possível encontrar nenhuma série</p>
                @endforelse
            </ul>
        </section>
    </div>
</x-layout>
