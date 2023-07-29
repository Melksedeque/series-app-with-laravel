<x-layout title="Editar série: '{{ $series->title }}'">
    <div class="container">
        <form action="{{ route('series.update', $series->id) }}" method="PUT">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Título da série" name="title" value="{{ $series?->title }}">
            <input type="text" placeholder="Quantidade de Temporadas" name="seasons" value="{{ $series?->seasons }}">
            <input type="text" placeholder="Data de Estréia" name="premiere_date" value="{{ $series?->premiere_date }}">
            <textarea name="synopsis" id="" cols="30" rows="5" placeholder="Sinopse">{{ $series?->synopsis }}</textarea>
            {{-- <input type="file" name="image" id="" value="{{ $series?->image }}"> --}}
            <select name="status" id="">
                <option value="1">Habilitada</option>
                <option value="0">Desabilitada</option>
            </select>
            <button type="submit">Salvar</button>
        </form>
    </div>
</x-layout>
