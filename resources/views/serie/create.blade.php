<x-layout title="Nova Série">
    <header class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <h1 class="h1">Inserir nova série</h1>
    </header>

    <form action="{{ route('serie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="left">
            <div class="mb-3">
                <label for="title" class="form-label">Título da Série: <span class="text-danger">*</span></label>
                <input type="text" class="form-control"
                name="title"
                value="{{ old('title') }}"
                placeholder="Título da série"
                autofocus>
            </div>
            <div class="mb-3">
                <label for="premiere_date" class="form-label">Data de lançamento:</label>
                <input type="date" class="form-control"
                name="premiere_date"
                value="{{ old('premiere_date') }}"
                placeholder="Data de Estréia">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Pôster:</label>
                <input type="file" class="form-control"
                    name="image">
            </div>
            <div class="mb-3">
                <label for="synopsis" class="form-label">Sinopse:</label>
                <textarea name="synopsis" class="form-control"
                cols="30" rows="5"
                placeholder="Sinopse">{{ old('synopsis') }}</textarea>
            </div>
        </div>
        <div class="right">
            <div class="seasons-container d-flex flex-row flex-wrap justify-content-between align-items-center">
                <h4>Temporadas e Episódios</h4>
                <button type="button" class="btn btn-sm btn-outline-success" id="add-season" data-button="add-season">Adicionar Temporada</button>
                <hr class="w-100">
            </div>
        </div>
        <div class="w-100">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>

</x-layout>
