<x-layout title="Series">
    <div class="container">
        <a href="{{ route('series.create') }}">+ Adicionar</a>

        @isset($message)
            <div class="alert alert-success">{{ $message }}</div>
        @endisset

        <section class="series">
            <ul>
                @forelse ($series as $serie)
                    <li>
                        {{ $serie->title }}
                        <a href="{{ route('series.edit', $serie->id) }}">Ed</a>
                        <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>X</button>
                        </form>
                    </li><br><br>
                @empty
                    <p>Não foi possível encontrar nenhuma série</p>
                @endforelse
            </ul>
        </section>
    </div>
</x-layout>
