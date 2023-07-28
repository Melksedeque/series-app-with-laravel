<x-layout title="Series">
    <header class="site-header">
        <div class="container">
            <h1>{{ $title }}</h1>
        </div>
    </header>

    <section class="series">
        <div class="container">
            <ul>
                @forelse ($series as $serie)
                    <li>{{$serie}}</li>
                @empty
                    <p>Não foi possível encontrar nenhuma série</p>
                @endforelse
            </ul>
        </div>
    </section>

    <footer class="site-footer"></footer>
</x-layout>
