<x-layout title="Nova Série">
    <header class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <h1 class="h1">Inserir nova série</h1>
    </header>

    <x-series.forms-create :action="route('series.store')" />
</x-layout>
