<x-layout title="Nova Série">
    <header class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <h1 class="h1">Inserir nova série</h1>
    </header>

    <form action="{{ route('serie.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título da Série: <span class="text-danger">*</span></label>
            <input type="text" class="form-control"
            name="title"
            value="{{ old('title') }}"
            placeholder="Título da série"
            autofocus>
        </div>
        <div class="mb-3">
            <label for="seasons" class="form-label">Quantas temporadas possui:</label>
            <input type="text" class="form-control"
            name="seasons"
            value="{{ old('seasons') }}"
            placeholder="Quantidade de Temporadas">
        </div>
        <div class="mb-3">
            <label for="premiere_date" class="form-label">Data de lançamento:</label>
            <input type="date" class="form-control"
            name="premiere_date"
            value="{{ old('premiere_date') }}"
            placeholder="Data de Estréia">
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Sinopse:</label>
            <textarea name="synopsis" class="form-control"
            cols="30" rows="5"
            placeholder="Sinopse">{{ old('synopsis') }}</textarea>
        </div>
        <div class="mb-3">
            <input type="file" class="form-control"
                name="image">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

</x-layout>
