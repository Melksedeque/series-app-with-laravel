<x-layout title="Inserir nova série">
    <div class="container">
        <form action="/series/store" method="POST">
            @csrf
            <input type="text" placeholder="Título da série" name="title">
            <input type="text" placeholder="Quantidade de Temporadas" name="seasons">
            <input type="text" placeholder="Data de Estréia" name="premiere_date">
            <textarea name="synopsis" id="" cols="30" rows="5" placeholder="Sinopse"></textarea>
            <input type="file" name="image" id="">
            <button type="submit">Salvar</button>
        </form>
    </div>
</x-layout>
