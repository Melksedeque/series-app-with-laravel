<x-layout title="Series">
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
</x-layout>
