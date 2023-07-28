<section class="series">
    <ul>
        @forelse ($series as $serie)
            <li>{{$serie}}</li>
        @empty
            <p>Não foi possível encontrar nenhuma série</p>
        @endforelse
    </ul>
</section>
