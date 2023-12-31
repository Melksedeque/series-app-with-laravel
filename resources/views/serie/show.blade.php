<x-layout title="Séries">
</div>

<div class="container content-serie d-flex justify-content-between align-items-start">
    <div class="left">
        {{-- {{ dd($serie->image); }} --}}
        @if ($serie->image)
            <img src="{{ url("storage/{$serie->image}") }}" alt="{{ $serie->title }}" class="img-fluid">
        @else
            <img src="{{ url("storage/series/noimage.jpg") }}" alt="{{ $serie->title }} sem imagem defida" class="img-fluid">
        @endif
    </div>

    <div class="right">
        <h2>Informações da série</h2>
        <ul>
            <li><strong>Título: </strong>{{ $serie->title }}</li>
            <li><strong>Temporadas: </strong>{{ $serie->seasons->count() }}</li>
            <li><strong>Data da estréia: </strong>{{ $serie->premiere_date }}</li>
            <li><strong>Sinopse:<br></strong>{{ $serie->synopsis }}</li>
        </ul>
    </div>
</div>

</x-layout>
