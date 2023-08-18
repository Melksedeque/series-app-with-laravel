<x-layout title="Alterar Série">
    <header class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <h1 class="h1">Editar série <em>"{{ $serie->title }}"</em></h1>
    </header>

    <form action="{{ route('serie.update', ['serie' => $serie->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Título da Série: <span class="text-danger">*</span></label>
            <input type="text" class="form-control"
            name="title"
            value="{{ old('title', $serie->title) }}"
            placeholder="Título da série">
        </div>
        <div class="mb-3">
            <label for="seasons" class="form-label">Quantas temporadas possui:</label>
            <input type="text" class="form-control"
            name="seasons"
            value="{{ old('seasons', $serie->seasons) }}"
            placeholder="Quantidade de Temporadas">
        </div>
        <div class="mb-3">
            <label for="premiere_date" class="form-label">Data de lançamento:</label>
            <input type="date" class="form-control"
            name="premiere_date"
            value="{{ old('premiere_date', $serie->premiere_date) }}"
            placeholder="Data de Estréia">
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Sinopse:</label>
            <textarea name="synopsis" class="form-control"
            cols="30" rows="5"
            placeholder="Sinopse">{{ old('synopsis', $serie->synopsis) }}</textarea>
        </div>
        <div class="mb-3">
            <input type="file" class="form-control"
            name="image">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" id="" class="form-control">
                <option value="0" @if(old('status', $serie->status) == 0) {{ 'selected' }} @endif>Inativo</option>
                <option value="1" @if(old('status', $serie->status) == 1) {{ 'selected' }} @endif>Ativo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

</x-layout>
