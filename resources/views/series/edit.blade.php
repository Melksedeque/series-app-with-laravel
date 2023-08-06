@extends('site.layout')

@section('content')

<header class="d-flex flex-wrap justify-content-between align-items-center mb-4">
    <h1 class="h1">Editar série: <em>{{ $series->title }}</em></h1>
</header>
<form action="{{ route('series.update', $series->id) }}" method="PUT">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Título da Série: <span class="text-danger">*</span></label>
        <input type="text" class="form-control"
        name="title"
        placeholder="Título da série"
        value="{{ old('title', $series->title) }}">
    </div>
    <div class="mb-3">
        <label for="seasons" class="form-label">Quantas temporadas possui:</label>
        <input type="text" class="form-control"
        name="seasons"
        placeholder="Quantidade de Temporadas"
        value="{{ old('seasons', $series->seasons) }}">
    </div>
    <div class="mb-3">
        <label for="premiere_date" class="form-label">Data de lançamento:</label>
        <input type="date" class="form-control"
        name="premiere_date"
        placeholder="Data de Estréia"
        value="{{ old('premiere_date', $series->premiere_date) }}">
    </div>
    <div class="mb-3">
        <label for="synopsis" class="form-label">Sinopse:</label>
        <textarea name="synopsis" class="form-control"
        cols="30" rows="5"
        placeholder="Sinopse">{{ old('synopsis', $series->synopsis) }}</textarea>
    </div>
    {{-- <div class="mb-3">
        <input type="file" name="image" id="" value="{{ $series?->image }}">
    </div> --}}
    <div class="mb-3">
        <label for="status" class="form-label">Status:</label>
        <select name="status" class="form-select">
            <option value="1">Habilitada</option>
            <option value="0">Desabilitada</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection
