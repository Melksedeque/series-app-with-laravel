@extends('site.layout')

@section('content')

<header class="d-flex flex-wrap justify-content-between align-items-center mb-4">
    <h1 class="h1">Series Controller</h1>
    <a href="{{ route('series.create') }}" class="btn btn-success">+ Adicionar</a>

    @isset($message)
        <div class="alert alert-success mt-4 w-100">{{ $message }}</div>
    @endisset
</header>
<section class="series">
    <ul class="list-group">
        @forelse ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->title }}
                <div class="options d-flex justify-content-around gap-3">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </li><br><br>
        @empty
            <p>Não foi possível encontrar nenhuma série</p>
        @endforelse
    </ul>
</section>

@endsection
